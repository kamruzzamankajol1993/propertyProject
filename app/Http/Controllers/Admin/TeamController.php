<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Team;
class TeamController extends Controller
{
    public function index(){


        $allSystemInfo = Team::latest()->get();

        return view('admin.team.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.team.create');
    }


    public function edit($id){

        $allSystemInfo = Team::where('id',$id)->first();

        return view('admin.team.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Team::find($id);
   $user->name = $request->name;
   $user->email = $request->email;
   $user->phone = $request->phone;
   $user->personalLine = $request->personalLine;
   $user->webLink = $request->webLink;
   $user->designation = $request->designation;
   if ($request->hasfile('image')) {

    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(330,425);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }




   $user->save();

   return redirect()->route('team.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Team();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone = $request->phone;
       $user->personalLine = $request->personalLine;
       $user->webLink = $request->webLink;
       $user->designation = $request->designation;
       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(330,425);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }



       $user->save();

       return redirect()->route('team.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = Team::destroy($id);

        return redirect()->route('team.index')->with('error','Deleted successfully!');
    }
}
