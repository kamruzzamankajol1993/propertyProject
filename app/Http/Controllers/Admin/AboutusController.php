<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use Image;
class AboutusController extends Controller
{
    public function index(){


        $allSystemInfo = Aboutus::latest()->first();

        if(!$allSystemInfo){

            return redirect()->route('aboutus.create');

            }else{

                return redirect()->route('aboutus.edit',$allSystemInfo->id);

            }

        //return view('admin.homePageContact.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = Aboutus::latest()->get();

        return view('admin.aboutus.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = Aboutus::where('id',$id)->first();

        return view('admin.aboutus.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Aboutus::find($id);
   $user->totalExperience = $request->totalExperience;
   $user->mainTitle = $request->mainTitle;
   $user->shortDescription = $request->shortDescription;
   $user->iconOne = $request->iconOne;
   $user->titleOne = $request->titleOne;
   $user->descriptionOne = $request->descriptionOne;
   $user->iconTwo = $request->iconTwo;
   $user->titleTwo = $request->titleTwo;
   $user->descriptionTwo = $request->descriptionTwo;
   $user->ceoName = $request->ceoName;
   $user->ceoDesignation = $request->ceoDesignation;

       if ($request->hasfile('imageOne')) {

        $productImage = $request->file('imageOne');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(574,722);
          $img->save($imageUrl);

           $user->imageOne =  'public/uploads/'.$imageName;

      }

      if ($request->hasfile('imageTwo')) {

        $productImage = $request->file('imageTwo');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(377,233);
          $img->save($imageUrl);

           $user->imageTwo =  'public/uploads/'.$imageName;

      }


      if ($request->hasfile('ceoImage')) {

        $productImage = $request->file('ceoImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(67,67);
          $img->save($imageUrl);

           $user->ceoImage =  'public/uploads/'.$imageName;

      }




   $user->save();

   return redirect()->route('aboutus.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Aboutus();
       $user->totalExperience = $request->totalExperience;
       $user->mainTitle = $request->mainTitle;
       $user->shortDescription = $request->shortDescription;
       $user->iconOne = $request->iconOne;
       $user->titleOne = $request->titleOne;
       $user->descriptionOne = $request->descriptionOne;
       $user->iconTwo = $request->iconTwo;
       $user->titleTwo = $request->titleTwo;
       $user->descriptionTwo = $request->descriptionTwo;
       $user->ceoName = $request->ceoName;
       $user->ceoDesignation = $request->ceoDesignation;

           if ($request->hasfile('imageOne')) {

            $productImage = $request->file('imageOne');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(470,526);
              $img->save($imageUrl);

               $user->imageOne =  'public/uploads/'.$imageName;

          }

          if ($request->hasfile('imageTwo')) {

            $productImage = $request->file('imageTwo');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(377,233);
              $img->save($imageUrl);

               $user->imageTwo =  'public/uploads/'.$imageName;

          }


          if ($request->hasfile('ceoImage')) {

            $productImage = $request->file('ceoImage');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(67,67);
              $img->save($imageUrl);

               $user->ceoImage =  'public/uploads/'.$imageName;

          }




       $user->save();

       return redirect()->route('aboutus.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = HomePageContact::destroy($id);

        return redirect()->route('aboutus.index')->with('error','Deleted successfully!');
    }

}
