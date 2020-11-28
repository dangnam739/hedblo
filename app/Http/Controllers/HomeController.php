<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Post;
use phpDocumentor\Reflection\Types\Compound;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $tags = DB::table("tags")->get();
        $posts = DB::table('posts')->orderBy('post_id','desc')->limit(3)->get();
        return view('user.home',compact('posts'), compact('tags'));
    }
}
