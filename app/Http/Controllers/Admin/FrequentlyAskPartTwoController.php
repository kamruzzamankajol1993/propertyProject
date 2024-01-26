<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\FrequentlyAskPartTwo;
class FrequentlyAskPartTwoController extends Controller
{
    public function index(){


        $allSystemInfo = FrequentlyAskPartTwo::latest()->get();

        return view('admin.frequentlyAskPartTwo.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.frequentlyAskPartTwo.create');
    }


    public function edit($id){

        $allSystemInfo = FrequentlyAskPartTwo::where('id',$id)->first();

        return view('admin.frequentlyAskPartTwo.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = FrequentlyAskPartTwo::find($id);
   $user->question = $request->question;
   $user->answer = $request->answer;








   $user->save();

   return redirect()->route('frequentlyAskPartTwo.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new FrequentlyAskPartTwo();
       $user->question = $request->question;
       $user->answer = $request->answer;




       $user->save();

       return redirect()->route('frequentlyAskPartTwo.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = FrequentlyAskPartTwo::destroy($id);

        return redirect()->route('frequentlyAskPartTwo.index')->with('error','Deleted successfully!');
    }
}
