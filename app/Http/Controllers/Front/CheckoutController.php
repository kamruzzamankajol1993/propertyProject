<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePrice;
use DB;
use URL;
use Mail;
use Session;
use Illuminate\Support\Str;
use App\Models\ServiceOrder;
class CheckoutController extends Controller
{

    private $base_url;
    private $app_key;
    private $app_secret;
    private $username;
    private $password;


    public function customer_checkout($id){

        $servicePrice = ServicePrice::where('id',$id)->latest()->first();
        
        //dd($servicePrice);

        return view('front.customer_checkout',compact('servicePrice'));
    }


    public function confirm_order(Request $request){

//dd($request->all());

// dd('online payment not available');

Session::put('name',$request->name);
Session::put('cname',$request->cname);
Session::put('phone',$request->phone);
Session::put('email',$request->email);
Session::put('address',$request->address);

Session::put('price',$request->price);
Session::put('pid',$request->pid);

// return redirect('/bkash/create');

   //new



            //Session::put('totalAmount',$request->totalAmount);






            $mainOrder = new ServiceOrder();
            $mainOrder->servicePriceId = Session::get('pid');
            $mainOrder->name = Session::get('name');

            $mainOrder->cname = Session::get('cname');
            $mainOrder->email =  Session::get('email');
            $mainOrder->phone = Session::get('phone');
            $mainOrder->address =Session::get('address');
            $mainOrder->amount =Session::get('price');
            $mainOrder->paymentType ='bkash';
            $mainOrder->status='Paid';
            $mainOrder->save();







             return redirect('success/');
            //new


    }


    public function __construct()
    {
        // Sandbox
        //$this->base_url = 'https://tokenized.sandbox.bka.sh/v1.2.0-beta';
        // Live
    $this->base_url = 'https://tokenized.pay.bka.sh/v1.2.0-beta';
$BKASH_CHECKOUT_URL_USER_NAME ='01846378186';
$BKASH_CHECKOUT_URL_PASSWORD = 'ge<?PoY^C4v';
$BKASH_CHECKOUT_URL_APP_KEY = 'Aj5Evn05lZbF490iEZmvbj6Ftc';
$BKASH_CHECKOUT_URL_APP_SECRET ='XGXITyufTVkbdbc1vdXP6eNx1a4yl9dQnywXK4FHAqs5UH8f8l8K';


        $this->app_key = $BKASH_CHECKOUT_URL_APP_KEY;
        $this->app_secret = $BKASH_CHECKOUT_URL_APP_SECRET;
        $this->username = $BKASH_CHECKOUT_URL_USER_NAME;
        $this->password = $BKASH_CHECKOUT_URL_PASSWORD;


    }

    public function authHeaders(){


        return array(
            'Content-Type:application/json',
            'Authorization:' .$this->grant(),
            'X-APP-Key:'.$this->app_key
        );
    }

    public function curlWithBody($url,$header,$method,$body_data_json){
        $curl = curl_init($this->base_url.$url);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_POSTFIELDS, $body_data_json);
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function grant()
    {




        $header = array(
                'Content-Type:application/json',
                'username:'.$this->username,
                'password:'.$this->password
                );

                //dd($header);
        $header_data_json=json_encode($header);

        $body_data = array('app_key'=>$this->app_key, 'app_secret'=>$this->app_secret);
        $body_data_json=json_encode($body_data);

        $response = $this->curlWithBody('/tokenized/checkout/token/grant',$header,'POST',$body_data_json);

          // dd($response);
        $token = json_decode($response)->id_token;

        return $token;
    }

    public function payment(Request $request)
    {
        return view('CheckoutURL.pay');
    }

    public function createPayment(Request $request)
    {
        $header =$this->authHeaders();

        $website_url = URL::to("/");

        $body_data = array(
            'mode' => '0011',
            'payerReference' => ' ',
            'callbackURL' => $website_url.'/bkash/callback',
             'amount' => Session::get('price') ? Session::get('price') : Session::get('price'),
            //'amount' => 50000 ? 50000 : 50000,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => "Inv".Str::random(8) // you can pass here OrderID
        );
        $body_data_json=json_encode($body_data);

        $response = $this->curlWithBody('/tokenized/checkout/create',$header,'POST',$body_data_json);

        return redirect((json_decode($response)->bkashURL));
    }

    public function executePayment($paymentID)
    {

        $header =$this->authHeaders();

        $body_data = array(
            'paymentID' => $paymentID
        );
        $body_data_json=json_encode($body_data);

        $response = $this->curlWithBody('/tokenized/checkout/execute',$header,'POST',$body_data_json);

        $res_array = json_decode($response,true);

        if(isset($res_array['trxID'])){
            // your database insert operation
            // save $response

        }

        return $response;
    }

    public function queryPayment($paymentID)
    {

        $header =$this->authHeaders();

        $body_data = array(
            'paymentID' => $paymentID,
        );
        $body_data_json=json_encode($body_data);

        $response = $this->curlWithBody('/tokenized/checkout/payment/status',$header,'POST',$body_data_json);

        $res_array = json_decode($response,true);

        if(isset($res_array['trxID'])){
            // your database insert operation
            // insert $response to your db

        }

         return $response;
    }

    public function callback(Request $request)
    {
        $allRequest = $request->all();
        if(isset($allRequest['status']) && $allRequest['status'] == 'failure'){
            return view('front.fail')->with([
                'response' => 'Payment Failure'
            ]);

        }else if(isset($allRequest['status']) && $allRequest['status'] == 'cancel'){
            return view('front.fail')->with([
                'response' => 'Payment Cancell'
            ]);

        }else{

            $response = $this->executePayment($allRequest['paymentID']);

            $arr = json_decode($response,true);

            if(array_key_exists("statusCode",$arr) && $arr['statusCode'] != '0000'){
                return view('front.fail')->with([
                    'response' => $arr['statusMessage'],
                ]);
            }else if(array_key_exists("message",$arr)){
                // if execute api failed to response
                sleep(1);
                $query = $this->queryPayment($allRequest['paymentID']);


                return view('front.success')->with([
                    'response' => $query
                ]);
            }


            //new



            //Session::put('totalAmount',$request->totalAmount);






            $mainOrder = new ServiceOrder();
            $mainOrder->servicePriceId = Session::get('pid');
            $mainOrder->name = Session::get('name');

            $mainOrder->cname = Session::get('cname');
            $mainOrder->email =  Session::get('email');
            $mainOrder->phone = Session::get('phone');
            $mainOrder->address =Session::get('address');
            $mainOrder->amount =Session::get('price');
            $mainOrder->paymentType ='bkash';
            $mainOrder->status='Paid';
            $mainOrder->save();







             return redirect('success/');
            //new

            // return view('CheckoutURL.success')->with([
            //     'response' => $response
            // ]);

        }

    }

    public function getRefund(Request $request)
    {
        return view('CheckoutURL.refund');
    }

    public function refundPayment(Request $request)
    {
        $header =$this->authHeaders();

        $body_data = array(
            'paymentID' => $request->paymentID,
            'amount' => $request->amount,
            'trxID' => $request->trxID,
            'sku' => 'sku',
            'reason' => 'Quality issue'
        );

        $body_data_json=json_encode($body_data);

        $response = $this->curlWithBody('/tokenized/checkout/payment/refund',$header,'POST',$body_data_json);

        // your database operation
        // save $response

        return view('CheckoutURL.refund')->with([
            'response' => $response,
        ]);
    }


    public function success(){

      return view('front.success');
    }


    public function fail(){

return view('front.fail');
    }
}
