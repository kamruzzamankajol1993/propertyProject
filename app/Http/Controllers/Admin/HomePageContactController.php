<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageContact;
use Image;
class HomePageContactController extends Controller
{
    public function index(){


        $allSystemInfo = HomePageContact::latest()->first();

        if(!$allSystemInfo){

            return redirect()->route('homePageContact.create');

            }else{

                return redirect()->route('homePageContact.edit',$allSystemInfo->id);

            }

        //return view('admin.homePageContact.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = HomePageContact::latest()->get();

        return view('admin.homePageContact.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = HomePageContact::where('id',$id)->first();

        return view('admin.homePageContact.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = HomePageContact::find($id);
   $user->title = $request->title;
       $user->sliderList = $request->sliderList;
       $user->backImage = $request->backImage;

       if ($request->hasfile('frontImage')) {

        $productImage = $request->file('frontImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(574,722);
          $img->save($imageUrl);

           $user->frontImage =  'public/uploads/'.$imageName;

      }

   $user->save();

   return redirect()->route('homePageContact.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new HomePageContact();
       $user->title = $request->title;
       $user->sliderList = $request->sliderList;


       if ($request->hasfile('frontImage')) {

        $productImage = $request->file('frontImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(314,101);
          $img->save($imageUrl);

           $user->frontImage =  'public/uploads/'.$imageName;

      }

      if ($request->hasfile('backImage')) {

        $productImage = $request->file('backImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1894,540);
          $img->save($imageUrl);

           $user->backImage =  'public/uploads/'.$imageName;

      }




       $user->save();

       return redirect()->route('homePageContact.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = HomePageContact::destroy($id);

        return redirect()->route('homePageContact.index')->with('error','Deleted successfully!');
    }




}
