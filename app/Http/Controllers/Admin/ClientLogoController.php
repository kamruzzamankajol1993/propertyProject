<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\clientLogo;
class ClientLogoController extends Controller
{
    public function index(){


        $allSystemInfo = clientLogo::latest()->get();

        return view('admin.clientLogo.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.clientLogo.create');
    }


    public function edit($id){

        $allSystemInfo = clientLogo::where('id',$id)->first();

        return view('admin.clientLogo.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = clientLogo::find($id);



   if ($request->hasfile('image')) {

    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(225,51);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }

   $user->save();

   return redirect()->route('clientLogo.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new clientLogo();
       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(225,51);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }



       $user->save();

       return redirect()->route('clientLogo.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = clientLogo::destroy($id);

        return redirect()->route('clientLogo.index')->with('error','Deleted successfully!');
    }
}
