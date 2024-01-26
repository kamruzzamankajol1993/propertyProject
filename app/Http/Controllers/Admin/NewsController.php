<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\News;
class NewsController extends Controller
{
    public function index(){


        $allSystemInfo = News::latest()->get();

        return view('admin.newsList.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.newsList.create');
    }


    public function edit($id){

        $allSystemInfo = News::where('id',$id)->first();

        return view('admin.newsList.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = News::find($id);
   $user->title = $request->title;
   $user->date = $request->date;
   $user->description = $request->description;


   if ($request->hasfile('image')) {

    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(370,300);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }


  if ($request->hasfile('coverImage')) {

    $productImage = $request->file('coverImage');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(800,483);
      $img->save($imageUrl);

       $user->coverImage =  'public/uploads/'.$imageName;

  }

   $user->save();

   return redirect()->route('newsList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new News();
       $user->title = $request->title;
       $user->date = $request->date;
       $user->description = $request->description;


       if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(370,300);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }


      if ($request->hasfile('coverImage')) {

        $productImage = $request->file('coverImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(800,483);
          $img->save($imageUrl);

           $user->coverImage =  'public/uploads/'.$imageName;

      }



       $user->save();

       return redirect()->route('newsList.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = News::destroy($id);

        return redirect()->route('newsList.index')->with('error','Deleted successfully!');
    }
}
