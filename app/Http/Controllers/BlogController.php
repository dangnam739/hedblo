<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogController extends Controller
{
    public function all_blog(){
        return view('user.blogs');
    }

    public function blog_detail(){
        return view('user.blog_detail');
    }

    public function create(Request $request){
        if($request->isMethod('post')){

        }
        return view('user.create_blog');
    } 

}
