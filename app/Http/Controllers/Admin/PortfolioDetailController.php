<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
class PortfolioDetailController extends Controller
{
    public function index(){


        $allSystemInfo = PortfolioDetail::latest()->get();

        return view('admin.portfolioDetail.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = PortfolioDetail::latest()->get();
        $allSystemInfoOne = Portfolio::latest()->get();
        return view('admin.portfolioDetail.create',compact('allSystemInfo','allSystemInfoOne'));
    }


    public function edit($id){

        $allSystemInfo = PortfolioDetail::where('id',$id)->first();
        $allSystemInfoOne = Portfolio::latest()->get();
        return view('admin.portfolioDetail.edit',compact('allSystemInfo','allSystemInfoOne'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = PortfolioDetail::find($id);
   $user->portfolioId  = $request->portfolioId ;
  $user->date = $request->date;
  $user->clientName = $request->clientName;
  $user->webLink = $request->webLink;
  $user->location = $request->location;
  $user->descriptionOne = $request->descriptionOne;


       if ($request->hasfile('serviceImage')) {

        $productImage = $request->file('serviceImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1894,870);
          $img->save($imageUrl);

           $user->serviceImage =  'public/uploads/'.$imageName;

      }


   $user->save();

   return redirect()->route('portfolioDetail.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new PortfolioDetail();
       $user->portfolioId  = $request->portfolioId ;
       $user->date = $request->date;
       $user->clientName = $request->clientName;
       $user->webLink = $request->webLink;
       $user->location = $request->location;
       $user->descriptionOne = $request->descriptionOne;


            if ($request->hasfile('serviceImage')) {

             $productImage = $request->file('serviceImage');
               $imageName = time().$productImage->getClientOriginalName();
               $directory = 'public/uploads/';
               $imageUrl = $directory.$imageName;

               $img=Image::make($productImage)->resize(1894,870);
               $img->save($imageUrl);

                $user->serviceImage =  'public/uploads/'.$imageName;

           }



       $user->save();

       return redirect()->route('portfolioDetail.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = PortfolioDetail::destroy($id);

        return redirect()->route('portfolioDetail.index')->with('error','Deleted successfully!');
    }
}
