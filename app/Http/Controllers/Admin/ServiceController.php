<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){


        $allSystemInfo = Service::latest()->get();

        return view('admin.service.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.service.create');
    }


    public function edit($id){

        $allSystemInfo = Service::where('id',$id)->first();

        return view('admin.service.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Service::find($id);
   $user->serviceTitle = $request->serviceTitle;
   $user->serviceIcon = $request->serviceIcon;
   $user->serviceShortDescription = $request->serviceShortDescription;




if ($request->hasfile('serviceImage')) {

    $productImage = $request->file('serviceImage');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(370,304);
      $img->save($imageUrl);

       $user->serviceImage =  'public/uploads/'.$imageName;

  }







   $user->save();

   return redirect()->route('service.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Service();
       $user->serviceTitle = $request->serviceTitle;
       $user->serviceIcon = $request->serviceIcon;
       $user->serviceShortDescription = $request->serviceShortDescription;


       if ($request->hasfile('serviceImage')) {

        $productImage = $request->file('serviceImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(370,304);
          $img->save($imageUrl);

           $user->serviceImage =  'public/uploads/'.$imageName;

      }



       $user->save();

       return redirect()->route('service.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = Service::destroy($id);

        return redirect()->route('service.index')->with('error','Deleted successfully!');
    }
}
