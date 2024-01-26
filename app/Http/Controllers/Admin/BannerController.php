<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
class BannerController extends Controller
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

        $allSystemInfo = Banner::get();

        $allSystemInfo = Banner::get();

        return view('admin.banner.edit',compact('allSystemInfo'));


    }

    public function create(){

        return view('admin.banner.create');
    }

    public function edit($id){

        $allSystemInfo = Banner::get();

        return view('admin.banner.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Banner::find($id);
   $user->bannerTitle = $request->bannerTitle;
   $user->bannerButtonLink = $request->bannerButtonLink;
   $user->bannerButtonName = $request->bannerButtonName;
   $user->bannerImageTwo = $request->bannerImageTwo;
if ($request->hasfile('bannerImage')) {

    $productImage = $request->file('bannerImage');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(1894,840);
      $img->save($imageUrl);

       $user->bannerImage =  'public/uploads/'.$imageName;

  }

//   if ($request->hasfile('bannerImageTwo')) {

//     $productImage = $request->file('bannerImageTwo');
//       $imageName = time().$productImage->getClientOriginalName();
//       $directory = 'public/uploads/';
//       $imageUrl = $directory.$imageName;

//       $img=Image::make($productImage)->resize(1894,840);
//       $img->save($imageUrl);

//        $user->bannerImageTwo =  'public/uploads/'.$imageName;

//   }

   $user->save();

   return redirect()->route('bannerList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Banner();
       $user->bannerTitle = $request->bannerTitle;
       $user->bannerButtonLink = $request->bannerButtonLink;
       $user->bannerButtonName = $request->bannerButtonName;

    if ($request->hasfile('bannerImage')) {

        $productImage = $request->file('bannerImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1894,840);
          $img->save($imageUrl);

           $user->bannerImage =  'public/uploads/'.$imageName;

      }


      if ($request->hasfile('bannerImageTwo')) {

        $productImage = $request->file('bannerImageTwo');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1894,840);
          $img->save($imageUrl);

           $user->bannerImageTwo =  'public/uploads/'.$imageName;

      }


       $user->save();

       return redirect()->route('bannerList.index')->with('success','Added successfully!');
    }
}
