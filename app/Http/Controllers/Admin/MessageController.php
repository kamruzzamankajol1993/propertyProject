<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function index(){

        $allMessageList = Message::latest()->get();

        return view('admin.message.index',compact('allMessageList'));
    }


    public function show($id){

        //dd(1);

         $allSystemInfo = Message::find($id);

        $allMessageList = Message::find($id);
        $allMessageList->status = 1;
        $allMessageList->save();

       return view('admin.message.view',compact('allSystemInfo'));
    }


    public function destroy($id){

        //dd(1);

        $user = Message::destroy($id);

        return redirect()->route('message.index')->with('error','Deleted successfully!');
    }
}
