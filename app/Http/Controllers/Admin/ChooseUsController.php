<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\ChooseUs;
class ChooseUsController extends Controller
{
    public function index(){


        $allSystemInfo = ChooseUs::latest()->first();

        if(!$allSystemInfo){

            return redirect()->route('chooseUs.create');

            }else{

                return redirect()->route('chooseUs.edit',$allSystemInfo->id);

            }

        //return view('admin.homePageContact.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = ChooseUs::latest()->get();

        return view('admin.chooseUs.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = ChooseUs::where('id',$id)->first();

        return view('admin.chooseUs.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ChooseUs::find($id);
   $user->titleOne = $request->titleOne;
   $user->titleTwo = $request->titleTwo;
   $user->titleThree = $request->titleThree;
   $user->iconNameOne = $request->iconNameOne;
   $user->iconNameTwo = $request->iconNameTwo;
   $user->iconNameThree	 = $request->iconNameThree;
   $user->iconTitleOne = $request->iconTitleOne;
   $user->iconTitleThree = $request->iconTitleThree;
   $user->iconTitleTwo = $request->iconTitleTwo;

       if ($request->hasfile('imageOne')) {

        $productImage = $request->file('imageOne');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(571,590);
          $img->save($imageUrl);

           $user->imageOne =  'public/uploads/'.$imageName;

      }

      if ($request->hasfile('imageTwo')) {

        $productImage = $request->file('imageTwo');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(152,153);
          $img->save($imageUrl);

           $user->imageTwo =  'public/uploads/'.$imageName;

      }







   $user->save();

   return redirect()->route('chooseUs.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ChooseUs();
       $user->titleOne = $request->titleOne;
       $user->titleTwo = $request->titleTwo;
       $user->titleThree = $request->titleThree;
       $user->iconNameOne = $request->iconNameOne;
       $user->iconNameTwo = $request->iconNameTwo;
       $user->iconNameThree	 = $request->iconNameThree;
       $user->iconTitleOne = $request->iconTitleOne;
       $user->iconTitleThree = $request->iconTitleThree;
       $user->iconTitleTwo = $request->iconTitleTwo;

           if ($request->hasfile('imageOne')) {

            $productImage = $request->file('imageOne');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(571,590);
              $img->save($imageUrl);

               $user->imageOne =  'public/uploads/'.$imageName;

          }

          if ($request->hasfile('imageTwo')) {

            $productImage = $request->file('imageTwo');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(152,153);
              $img->save($imageUrl);

               $user->imageTwo =  'public/uploads/'.$imageName;

          }







       $user->save();

       return redirect()->route('chooseUs.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ChooseUs::destroy($id);

        return redirect()->route('chooseUs.index')->with('error','Deleted successfully!');
    }
}
