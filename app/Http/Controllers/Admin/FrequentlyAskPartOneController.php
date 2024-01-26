<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\FrequentlyAskPartOne;
class FrequentlyAskPartOneController extends Controller
{
    public function index(){


        $allSystemInfo = FrequentlyAskPartOne::latest()->first();

        if(!$allSystemInfo){

            return redirect()->route('frequentlyAskPartOne.create');

            }else{

                return redirect()->route('frequentlyAskPartOne.edit',$allSystemInfo->id);

            }

        //return view('admin.homePageContact.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = FrequentlyAskPartOne::latest()->get();

        return view('admin.frequentlyAskPartOne.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = FrequentlyAskPartOne::where('id',$id)->first();

        return view('admin.frequentlyAskPartOne.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = FrequentlyAskPartOne::find($id);
   $user->totalYear = $request->totalYear;
   $user->titleOne = $request->titleOne;
   $user->descriptionOne = $request->descriptionOne;
   $user->titleTwo = $request->titleTwo;
   $user->descriptionTwo = $request->descriptionTwo;
   $user->titleThree = $request->titleThree;
   $user->descriptionThree = $request->descriptionThree;


       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1923,443);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }






   $user->save();

   return redirect()->route('frequentlyAskPartOne.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new FrequentlyAskPartOne();
       $user->totalYear = $request->totalYear;
   $user->titleOne = $request->titleOne;
   $user->descriptionOne = $request->descriptionOne;
   $user->titleTwo = $request->titleTwo;
   $user->descriptionTwo = $request->descriptionTwo;
   $user->titleThree = $request->titleThree;
   $user->descriptionThree = $request->descriptionThree;


       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(230,310);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }




       $user->save();

       return redirect()->route('frequentlyAskPartOne.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = FrequentlyAskPartOne::destroy($id);

        return redirect()->route('frequentlyAskPartOne.index')->with('error','Deleted successfully!');
    }
}
