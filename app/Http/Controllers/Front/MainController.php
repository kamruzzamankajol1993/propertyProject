<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ServiceTitle;
use App\Models\Service;
use App\Models\Aboutus;
use App\Models\HomePageContact;
use App\Models\FrequentlyAskPartOne;
use App\Models\FrequentlyAskPartTwo;
use App\Models\TestimonialPartOne;
use App\Models\TestimonialPartTwo;
use App\Models\ChooseUs;
use App\Models\clientLogo;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\ProjectCount;
use App\Models\News;
use App\Models\Message;
use App\Models\Team;
use App\Models\ServicePrice;
use App\Models\ServiceDetail;
use App\Models\TeamDetail;
use App\Models\MessagePartOne;
use App\Models\TermAndCondition;
use App\Models\PrivacyPolicy;
use Response;
class MainController extends Controller
{

    public function term_and_condition(){

        $term = TermAndCondition::first();
        return view('front.term_and_condition',compact('term'));
    }

    public function privacy_policy(){

        $term = PrivacyPolicy::first();
        return view('front.privacy_policy',compact('term'));

    }


    public function index(){
        $allBannerInfo = Banner::get();

        //dd($allBannerInfo);
        $allServiceTitleInfo = ServiceTitle::latest()->first();
        $allAboutusInfo = Aboutus::latest()->first();
        $allhomePageContactInfo = HomePageContact::latest()->first();
        $allServiceInfo = Service::latest()->limit(6)->get();
$allServiceInfo1 = Service::latest()->get();
        $askQOneInfo = FrequentlyAskPartOne::latest()->first();
        $askQTwoInfo = FrequentlyAskPartTwo::latest()->limit(4)->get();

        $allTestimonialPartOneInfo = TestimonialPartOne::latest()->first();
        $allTestimonialPartTwoInfo = TestimonialPartTwo::latest()->get();

        $allChooseUsInfo = ChooseUs::latest()->first();
        $allPortfolioInfo = Portfolio::latest()->limit(4)->get();


        $allPortfolioInfoOne = PortfolioDetail::latest()->limit(4)->get();




        $allProjectCountInfo = ProjectCount::latest()->get();

        $newsList = News::latest()->get();

        $allClientLogoInfo = clientLogo::latest()->get();

        return view('front.home.index',compact('allPortfolioInfoOne','allServiceInfo1','allClientLogoInfo','newsList','allProjectCountInfo','allPortfolioInfo','allChooseUsInfo','allTestimonialPartTwoInfo','allTestimonialPartOneInfo','askQTwoInfo','askQOneInfo','allhomePageContactInfo','allAboutusInfo','allBannerInfo','allServiceTitleInfo','allServiceInfo'));
    }


    public function propertyList(){

        $allPortfolioInfoOne = PortfolioDetail::latest()->get();
        return view('front.propertyList',compact('allPortfolioInfoOne'));


    }




    public function serviceList(){
        $allServiceTitleInfo = ServiceTitle::latest()->first();
        $allServiceInfo = Service::latest()->get();
        return view('front.serviceList',compact('allServiceTitleInfo','allServiceInfo'));


    }


    public function builderList(){
        $allServiceInfo = ServiceDetail::latest()->get();
        return view('front.builderList',compact('allServiceInfo'));
    }

    public function shop(){

        $allServiceInfo = ServicePrice::where('status',0)->latest()->get();
        return view('front.shop',compact('allServiceInfo'));
    }

    public function serviceInformation($id){

        $serviceListR = Service::inRandomOrder()->get();
        $serviceList = Service::where('id',$id)->latest()->first();
        $serviceListOne = ServiceDetail::where('serviceId',$serviceList->id)->latest()->first();


        $servicePrice = ServicePrice::where('serviceDetailId',$serviceListOne->id)->latest()->get();
        return view('front.serviceInformation',compact('servicePrice','serviceListOne','serviceList','serviceListR'));
    }


    public function servicePdf($id){

        $get_file_data = ServiceDetail::where('id',$id)->value('servicePdfFile');

        //dd($get_file_data);

        $file_path = url('public/'.$get_file_data);
                                $filename  = pathinfo($file_path, PATHINFO_FILENAME);

        $file= public_path('/'). $get_file_data;

        $headers = array(
                  'Content-Type: application/pdf',
                );

        // return Response::download($file,$filename.'.pdf', $headers);

        return Response::make(file_get_contents($file), 200, [
            'content-type'=>'application/pdf',
        ]);

    }


    public function projectList(){

        $allPortfolioInfo = Portfolio::latest()->get();
        return view('front.projectList',compact('allPortfolioInfo'));
    }


    public function projectInformation($id){
        $portfolioListR = Portfolio::inRandomOrder()->get();
        $portfolioList = Portfolio::where('id',$id)->latest()->first();
        $portfolioListOne = PortfolioDetail::where('portfolioId',$portfolioList->id)->latest()->first();
        return view('front.projectInformation',compact('portfolioListOne','portfolioListR','portfolioList'));


    }

    public function faq(){
        $askQTwoInfo = FrequentlyAskPartTwo::latest()->get();
        return view('front.faq',compact('askQTwoInfo'));

    }



    public function about_us(){
        $allAboutusInfo = Aboutus::latest()->first();
               $allTeamInfo = Team::latest()->get();
               $allChooseUsInfo = ChooseUs::latest()->first();
        return view('front.aboutUs',compact('allChooseUsInfo','allAboutusInfo','allTeamInfo'));

    }


    public function teamList(){
        $allTeamInfo = Team::latest()->get();

        return view('front.teamList',compact('allTeamInfo'));

    }

    public function team_detail($id){
        $teamList = Team::where('id',$id)->latest()->first();
        $teamSocialListOne = TeamDetail::where('teamId',$teamList->id)->latest()->get();
        return view('front.team_detail',compact('teamList','teamSocialListOne'));

    }

    public function newsList(){
        $newsList = News::latest()->get();
        return view('front.newsList',compact('newsList'));
    }

    public function news_detail($id){

        $newsList = News::where('id',$id)->latest()->first();
        $newsListOne = News::latest()->limit(3)->get();
        return view('front.news_detail',compact('newsList','newsListOne'));

    }

    public function contact_us(){
$allServiceInfo1 = Service::latest()->get();
        $allMessagePartOneInfo = MessagePartOne::latest()->first();
        return view('front.contact_us',compact('allServiceInfo1','allMessagePartOneInfo'));
    }


    public function sendMessage(Request $request){

        $user = new Message();
         $user->serviceName  = $request->serviceName;
          $user->murl  = $request->murl;
           $user->mtime  = $request->mtime;
          $user->mdate  = $request->mdate;

       $user->name  = $request->name;
       $user->email = $request->email;
       $user->subject = $request->subject;
       $user->phone = $request->phone;
       $user->description = $request->description;
       $user->save();


       return redirect()->back();
    }
}
