<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Service;
use App\Models\ServiceDetail;
use Response;
use App\Models\ServicePrice;
class ServicePriceController extends Controller
{
    public function index(){


        $allSystemInfo = ServicePrice::latest()->get();

        return view('admin.servicePrice.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = ServicePrice::latest()->get();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.create',compact('allSystemInfo','allSystemInfoOne'));
    }
    
    public function tutorial_or_digital_product_add(){
        $allSystemInfo = ServicePrice::latest()->get();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.tutorial_or_digital_product_add',compact('allSystemInfo','allSystemInfoOne'));
    }


    public function edit($id){

        $allSystemInfo = ServicePrice::where('id',$id)->first();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.edit',compact('allSystemInfo','allSystemInfoOne'));

    }
    
     public function tutorial_or_digital_product_edit($id){

        $allSystemInfo = ServicePrice::where('id',$id)->first();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.tutorial_or_digital_product_edit',compact('allSystemInfo','allSystemInfoOne'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ServicePrice::find($id);
   $user->serviceDetailId = $request->serviceDetailId;
       $user->serviceTitle = $request->serviceTitle;
       $user->serviceFeature = $request->serviceFeature;
       $user->servicePrice = $request->	servicePrice;

       if ($request->hasfile('image')) {
       $user->status = 0;
    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(600,600);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }
   $user->save();

   return redirect()->route('servicePrice.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ServicePrice();
       $user->serviceDetailId = $request->serviceDetailId;
       $user->serviceTitle = $request->serviceTitle;
       $user->serviceFeature = $request->serviceFeature;
       $user->servicePrice = $request->	servicePrice;
   if ($request->hasfile('image')) {
       $user->status = 0;
    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(600,600);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }
       $user->save();

       return redirect()->route('servicePrice.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ServicePrice::destroy($id);

        return redirect()->route('servicePrice.index')->with('error','Deleted successfully!');
    }



}
