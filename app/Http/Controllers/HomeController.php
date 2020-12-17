<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Post;
use phpDocumentor\Reflection\Types\Compound;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
class HomeController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
        public function homepage(){
            $posts = DB::table('posts')->orderBy('post_id','desc')->limit(3)->get();
            return view('user.home',compact('posts'));  
        }

    public function index()
    {
        if(Auth::user() && Auth::user()->admin){
            return redirect('/admin/home-page');
        }
        else {
            $posts = DB::table('posts')->orderBy('post_id','desc')->limit(3)->get();
            return view('user.home',compact('posts'));                
        }
    }
}
