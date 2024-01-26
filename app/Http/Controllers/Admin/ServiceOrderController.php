<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceDetail;
use Response;
use App\Models\ServicePrice;
use App\Models\ServiceOrder;
class ServiceOrderController extends Controller
{
    public function index(){


        $allSystemInfo = ServiceOrder::latest()->get();

        return view('admin.serviceOrder.index',compact('allSystemInfo'));
    }

    public function create(){
        $allSystemInfo = ServicePrice::latest()->get();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.create',compact('allSystemInfo','allSystemInfoOne'));
    }


    public function edit($id){

        $allSystemInfo = ServicePrice::where('id',$id)->first();
        $allSystemInfoOne = Service::latest()->get();
        return view('admin.servicePrice.edit',compact('allSystemInfo','allSystemInfoOne'));

    }
    
    public function show($id){
        
        //dd(1);
        
             $allSystemInfo = ServiceOrder::where('id',$id)->first();

        return view('admin.serviceOrder.view',compact('allSystemInfo'));
    }


    public function update(Request $request,$id){
   // Create New User
   $user = ServicePrice::find($id);
   $user->serviceDetailId = $request->serviceDetailId;
       $user->serviceTitle = $request->serviceTitle;
       $user->serviceFeature = $request->serviceFeature;
       $user->servicePrice = $request->	servicePrice;
   $user->save();

   return redirect()->route('servicePrice.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ServicePrice();
       $user->serviceDetailId = $request->serviceDetailId;
       $user->serviceTitle = $request->serviceTitle;
       $user->serviceFeature = $request->serviceFeature;
       $user->servicePrice = $request->	servicePrice;

       $user->save();

       return redirect()->route('servicePrice.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ServiceOrder::destroy($id);

        return redirect()->route('serviceOrder.index')->with('error','Deleted successfully!');
    }
}
