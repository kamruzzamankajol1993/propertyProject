<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\ProjectCount;
class ProjectCountController extends Controller
{
    public function index(){


        $allSystemInfo = ProjectCount::latest()->get();

        return view('admin.projectCount.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.projectCount.create');
    }


    public function edit($id){

        $allSystemInfo = ProjectCount::where('id',$id)->first();

        return view('admin.projectCount.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ProjectCount::find($id);
   $user->icon = $request->icon;
   $user->count = $request->count;
   $user->name = $request->	name;

   $user->save();

   return redirect()->route('projectCount.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ProjectCount();
       $user->icon = $request->icon;
       $user->count = $request->count;
       $user->name = $request->	name;

       $user->save();

       return redirect()->route('projectCount.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ProjectCount::destroy($id);

        return redirect()->route('projectCount.index')->with('error','Deleted successfully!');
    }
}
