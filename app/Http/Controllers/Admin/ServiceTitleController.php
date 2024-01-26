<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\ServiceTitle;
class ServiceTitleController extends Controller
{
    public function index(){


        // if ($request->hasfile('big_image')) {

        //     $productImage = $request->file('big_image');
        //       $imageName = time().$productImage->getClientOriginalName();
        //       $directory = 'public/uploads/';
        //       $imageUrl = $directory.$imageName;

        //       $img=Image::make($productImage)->resize(1800,1006);
        //       $img->save($imageUrl);

        //        $category->big_image =  'public/uploads/'.$imageName;

        //   }

        $allSystemInfo = ServiceTitle::latest()->first();

        if(!$allSystemInfo){

        return redirect()->route('serviceTitle.create');

        }else{

            return redirect()->route('serviceTitle.edit',$allSystemInfo->id);

        }


    }

    public function create(){

        return view('admin.serviceTitle.create');
    }

    public function edit($id){

        $allSystemInfo = ServiceTitle::where('id',$id)->first();

        return view('admin.serviceTitle.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ServiceTitle::find($id);
   $user->serviceTitleOne = $request->serviceTitleOne;
   $user->serviceTitleTwo = $request->serviceTitleTwo;
   $user->save();

   return redirect()->route('serviceTitle.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ServiceTitle();
       $user->serviceTitleOne = $request->serviceTitleOne;
       $user->serviceTitleTwo = $request->serviceTitleTwo;
       $user->save();

       return redirect()->route('serviceTitle.index')->with('success','Added successfully!');
    }

}
