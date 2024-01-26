<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermAndCondition;
use Image;
class TermController extends Controller
{
    public function index(){




        $allSystemInfo = TermAndCondition::latest()->get();

        return view('admin.returnPolicy.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.returnPolicy.create');
    }


    public function edit($id){

        $allSystemInfo = TermAndCondition::where('id',$id)->first();

        return view('admin.returnPolicy.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = TermAndCondition::find($id);
   $user->terms = $request->terms;
   $user->save();

   return redirect()->route('termAndCondition.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new TermAndCondition();
       $user->terms = $request->terms;
       $user->save();

       return redirect()->route('termAndCondition.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = TermAndCondition::destroy($id);

        return redirect()->route('termAndCondition.index')->with('error','Deleted successfully!');
    }
}
