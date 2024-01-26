<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\TestimonialPartTwo;
class TestimonialPartTwoController extends Controller
{
    public function index(){


        $allSystemInfo = TestimonialPartTwo::latest()->get();

        return view('admin.testimonialPartTwo.index',compact('allSystemInfo'));
    }


    public function create(){
        $allSystemInfo = TestimonialPartTwo::latest()->get();

        return view('admin.testimonialPartTwo.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = TestimonialPartTwo::where('id',$id)->first();

        return view('admin.testimonialPartTwo.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = TestimonialPartTwo::find($id);
   $user->name = $request->name;
   $user->type = $request->type;
   $user->rate = $request->rate;
   $user->designation = $request->designation;
   $user->shortDescription = $request->shortDescription;


       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(200,200);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }






   $user->save();

   return redirect()->route('testimonialPartTwo.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new TestimonialPartTwo();
       $user->name = $request->name;
       $user->type = $request->type;
   $user->rate = $request->rate;
   $user->designation = $request->designation;
   $user->shortDescription = $request->shortDescription;


       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(200,200);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }




       $user->save();

       return redirect()->route('testimonialPartTwo.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = TestimonialPartTwo::destroy($id);

        return redirect()->route('testimonialPartTwo.index')->with('error','Deleted successfully!');
    }
}
