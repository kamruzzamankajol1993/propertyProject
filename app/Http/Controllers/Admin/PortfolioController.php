<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Portfolio;
class PortfolioController extends Controller
{
    public function index(){


        $allSystemInfo = Portfolio::latest()->get();

        return view('admin.portfolio.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.portfolio.create');
    }


    public function edit($id){

        $allSystemInfo = Portfolio::where('id',$id)->first();

        return view('admin.portfolio.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Portfolio::find($id);
   $user->title = $request->title;

if ($request->hasfile('image')) {

    $productImage = $request->file('image');
      $imageName = time().$productImage->getClientOriginalName();
      $directory = 'public/uploads/';
      $imageUrl = $directory.$imageName;

      $img=Image::make($productImage)->resize(400,466);
      $img->save($imageUrl);

       $user->image =  'public/uploads/'.$imageName;

  }

   $user->save();

   return redirect()->route('portfolio.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Portfolio();
       $user->title = $request->title;

       if ($request->hasfile('image')) {

           $productImage = $request->file('image');
             $imageName = time().$productImage->getClientOriginalName();
             $directory = 'public/uploads/';
             $imageUrl = $directory.$imageName;

             $img=Image::make($productImage)->resize(400,466);
             $img->save($imageUrl);

              $user->image =  'public/uploads/'.$imageName;

         }

          $user->save();
  

       return redirect()->route('portfolio.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = Portfolio::destroy($id);

        return redirect()->route('portfolio.index')->with('error','Deleted successfully!');
    }
}
