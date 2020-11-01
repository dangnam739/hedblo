<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AuthController extends Controller
{
    public function  login(Request $request){
        if ($request->isMethod("POST")){

        }
        return view('user.login');
    }

    public function register(Request $request){
        if ($request->isMethod("POST")){

        }
        return view('user.register');
    }

    public function profile(Request $request){
        if ($request->isMethod("POST")){

        }
        return view('user_profile');
    }

    public function change_pass(Request $request){
        if($request->isMethod('POST')){

        }
        return view('user.change_pass');
    }
}
