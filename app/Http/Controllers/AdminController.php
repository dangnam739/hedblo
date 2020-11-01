<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function change_pass(Request $request){
        if($request->isMethod('post')){

        }
        return view('admin.change_pass');
    }
}
