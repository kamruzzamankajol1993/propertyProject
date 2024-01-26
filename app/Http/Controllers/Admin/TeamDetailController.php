<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\TeamDetail;
use App\Models\Team;
class TeamDetailController extends Controller
{
    public function index(){


        $allSystemInfo = TeamDetail::latest()->get();

        return view('admin.teamDetail.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfoOne = Team::latest()->get();
        return view('admin.teamDetail.create',compact('allSystemInfoOne'));
    }


    public function edit($id){

        $allSystemInfo = TeamDetail::where('id',$id)->first();
        $allSystemInfoOne = Team::latest()->get();
        return view('admin.teamDetail.edit',compact('allSystemInfo','allSystemInfoOne'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = TeamDetail::find($id);
   $user->teamId = $request->teamId ;
   $user->linkName = $request->linkName;
   $user->link = $request->link;
   $user->save();

   return redirect()->route('teamDetail.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new TeamDetail();
       $user->teamId = $request->teamId ;
       $user->linkName = $request->linkName;
       $user->link = $request->link;
       $user->save();

       return redirect()->route('teamDetail.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = TeamDetail::destroy($id);

        return redirect()->route('teamDetail.index')->with('error','Deleted successfully!');
    }
}
