<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\MessagePartOne;
class MessagePartOneController extends Controller
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

        $allSystemInfo = MessagePartOne::latest()->first();

        if(!$allSystemInfo){

        return redirect()->route('messagePartOne.create');

        }else{

            return redirect()->route('messagePartOne.edit',$allSystemInfo->id);

        }


    }

    public function create(){

        return view('admin.messagePartOne.create');
    }

    public function edit($id){

        $allSystemInfo = MessagePartOne::where('id',$id)->first();

        return view('admin.messagePartOne.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = MessagePartOne::find($id);
   $user->title = $request->title;
   $user->titleTwo = $request->titleTwo;
   $user->description = $request->description;
   $user->phone = $request->phone;
   $user->image = $request->image;
// if ($request->hasfile('image')) {

//     $productImage = $request->file('image');
//       $imageName = time().$productImage->getClientOriginalName();
//       $directory = 'public/uploads/';
//       $imageUrl = $directory.$imageName;

//       $img=Image::make($productImage)->resize(1890,540);
//       $img->save($imageUrl);

//        $user->image =  'public/uploads/'.$imageName;

//   }

   $user->save();

   return redirect()->route('messagePartOne.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new MessagePartOne();
       $user->title = $request->title;
       $user->titleTwo = $request->titleTwo;
       $user->description = $request->description;

    if ($request->hasfile('image')) {

        $productImage = $request->file('image');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1890,540);
          $img->save($imageUrl);

           $user->image =  'public/uploads/'.$imageName;

      }


       $user->save();

       return redirect()->route('messagePartOne.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = MessagePartOne::destroy($id);

        return redirect()->route('messagePartOne.index')->with('error','Deleted successfully!');
    }
}
