<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\TestimonialPartOne;
class TestimonialPartOneController extends Controller
{
    public function index(){


        $allSystemInfo = TestimonialPartOne::latest()->first();

        if(!$allSystemInfo){

            return redirect()->route('testimonialPartOne.create');

            }else{

                return redirect()->route('testimonialPartOne.edit',$allSystemInfo->id);

            }

        //return view('admin.homePageContact.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = TestimonialPartOne::latest()->get();

        return view('admin.testimonialPartOne.create',compact('allSystemInfo'));
    }


    public function edit($id){

        $allSystemInfo = TestimonialPartOne::where('id',$id)->first();

        return view('admin.testimonialPartOne.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = TestimonialPartOne::find($id);
   $user->title = $request->title;
   $user->shortDescription = $request->shortDescription;
   $user->save();

   return redirect()->route('testimonialPartOne.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new TestimonialPartOne();
       $user->title = $request->title;
       $user->shortDescription = $request->shortDescription;
       $user->save();

       return redirect()->route('testimonialPartOne.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = TestimonialPartOne::destroy($id);

        return redirect()->route('testimonialPartOne.index')->with('error','Deleted successfully!');
    }
}
