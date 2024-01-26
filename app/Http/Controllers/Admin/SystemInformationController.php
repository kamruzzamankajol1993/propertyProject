<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\SystemInformation;
class SystemInformationController extends Controller
{
    public function index(){


        // if ($request->hasfile('big_image')) {

        //     $productImage = $request->file('big_image');
        //       $imageName = time().$productImage->getClientOriginalName();
        //       $directory = 'public/uploads/';
        //       $imageUrl = $directory.$imageName;

        //       $img=Image::make($productImage)->resize(1800,1006);
        //       $img->save($imageUrl);

        //        $category->big_image =  'public/uploads/'.$imageName;

        //   }

        $allSystemInfo = SystemInformation::latest()->get();

        return view('admin.system.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.system.create');
    }


    public function edit($id){

        $allSystemInfo = SystemInformation::where('id',$id)->first();

        return view('admin.system.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = SystemInformation::find($id);
   $user->siteName = $request->siteName;
   $user->sitePhone = $request->sitePhone;
   $user->siteEmail = $request->siteEmail;
   $user->siteAbout = $request->siteAbout;
   $user->siteAddress = $request->siteAddress;




if ($request->hasfile('adminSiteLogo')) {

    $productImage = $request->file('adminSiteLogo');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(150,150);
      $img->save($imageUrl);

       $user->adminSiteLogo =  'public/uploads/'.$imageName;

  }

  if ($request->hasfile('siteLogo')) {

    $productImage = $request->file('siteLogo');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(60,60);
      $img->save($imageUrl);

       $user->siteLogo =  'public/uploads/'.$imageName;

  }

  if ($request->hasfile('siteIcon')) {

    $productImage = $request->file('siteIcon');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(50,50);
      $img->save($imageUrl);

       $user->siteIcon =  'public/uploads/'.$imageName;

  }





   $user->save();

   return redirect()->route('systemInformation.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new SystemInformation();
       $user->siteName = $request->siteName;
       $user->sitePhone = $request->sitePhone;
       $user->siteEmail = $request->siteEmail;
       $user->siteAbout = $request->siteAbout;
       $user->siteAddress = $request->siteAddress;

       if ($request->hasfile('adminSiteLogo')) {

        $productImage = $request->file('adminSiteLogo');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(139,50);
          $img->save($imageUrl);

           $user->adminSiteLogo =  'public/uploads/'.$imageName;

      }

      if ($request->hasfile('siteLogo')) {

        $productImage = $request->file('siteLogo');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(139,50);
          $img->save($imageUrl);

           $user->siteLogo =  'public/uploads/'.$imageName;

      }

      if ($request->hasfile('siteIcon')) {

        $productImage = $request->file('siteIcon');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(50,50);
          $img->save($imageUrl);

           $user->siteIcon =  'public/uploads/'.$imageName;

      }


       $user->save();

       return redirect()->route('systemInformation.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = SystemInformation::destroy($id);

        return redirect()->route('systemInformation.index')->with('error','Deleted successfully!');
    }
}
