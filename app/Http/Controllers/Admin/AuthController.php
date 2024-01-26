<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginAdmin(){

        return view('admin.auth.loginAdmin1');
    }

    public function RegistrationAdmin(){
        return view('admin.auth.RegistrationAdmin');

    }
}
