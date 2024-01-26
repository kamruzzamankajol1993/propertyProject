<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Service;
use App\Models\ServiceDetail;
use Response;
class ServiceDetailController extends Controller
{
    public function index(){


        $allSystemInfo = ServiceDetail::latest()->get();

        return view('admin.serviceDetail.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = ServiceDetail::latest()->get();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.serviceDetail.create',compact('allSystemInfo','allSystemInfoOne'));
    }


    public function edit($id){

        $allSystemInfo = ServiceDetail::where('id',$id)->first();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.serviceDetail.edit',compact('allSystemInfo','allSystemInfoOne'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ServiceDetail::find($id);
   $user->serviceImage = $request->serviceImage;
  $user->serviceDescription = $request->serviceDescription;
  $user->servicePdfFile = $request->servicePdfFile;

    //    if ($request->hasfile('serviceImage')) {

    //     $productImage = $request->file('serviceImage');
    //       $imageName = time().$productImage->getClientOriginalName();
    //       $directory = 'public/uploads/';
    //       $imageUrl = $directory.$imageName;

    //       $img=Image::make($productImage)->resize(850,650);
    //       $img->save($imageUrl);

    //        $user->serviceImage =  'public/uploads/'.$imageName;

    //   }


    //   if ($request->hasfile('servicePdfFile')) {
    //     $file = $request->file('servicePdfFile');
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time() . '.' . $extension;
    //     $file->move('public/uploads/', $filename);
    //     $user->servicePdfFile = 'uploads/' . $filename;
    // }







   $user->save();

   return redirect()->route('serviceDetail.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ServiceDetail();
       $user->serviceImage = $request->serviceImage;
       $user->serviceDescription = $request->serviceDescription;
       $user->servicePdfFile = $request->servicePdfFile;


    //    if ($request->hasfile('serviceImage')) {

    //     $productImage = $request->file('serviceImage');
    //       $imageName = time().$productImage->getClientOriginalName();
    //       $directory = 'public/uploads/';
    //       $imageUrl = $directory.$imageName;

    //       $img=Image::make($productImage)->resize(850,650);
    //       $img->save($imageUrl);

    //        $user->serviceImage =  'public/uploads/'.$imageName;

    //   }


    //   if ($request->hasfile('servicePdfFile')) {
    //     $file = $request->file('servicePdfFile');
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time() . '.' . $extension;
    //     $file->move('public/uploads/', $filename);
    //     $user->servicePdfFile = 'uploads/' . $filename;
    // }



       $user->save();

       return redirect()->route('serviceDetail.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ServiceDetail::destroy($id);

        return redirect()->route('serviceDetail.index')->with('error','Deleted successfully!');
    }



    public function show($id){
        $get_file_data = ServiceDetail::where('id',$id)->value('servicePdfFile');

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
}
