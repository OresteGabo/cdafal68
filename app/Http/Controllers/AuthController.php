<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){
        return view('auth.index');
    }
    public function signup(){
        return view('auth.signup');
    }

}
