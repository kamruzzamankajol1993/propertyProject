<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use Image;
class PrivacyPolicyController extends Controller
{
    public function index(){




        $allSystemInfo = PrivacyPolicy::latest()->get();

        return view('admin.privacyPolicy.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.privacyPolicy.create');
    }


    public function edit($id){

        $allSystemInfo = PrivacyPolicy::where('id',$id)->first();

        return view('admin.privacyPolicy.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = PrivacyPolicy::find($id);
   $user->privacy_policies = $request->privacy_policies;
   $user->save();

   return redirect()->route('privacyPolicy.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new PrivacyPolicy();
       $user->privacy_policies = $request->privacy_policies;
       $user->save();

       return redirect()->route('privacyPolicy.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = PrivacyPolicy::destroy($id);

        return redirect()->route('privacyPolicy.index')->with('error','Deleted successfully!');
    }
}
