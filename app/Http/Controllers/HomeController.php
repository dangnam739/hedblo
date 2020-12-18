<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Post;
use phpDocumentor\Reflection\Types\Compound;
use Session;
use Illuminate\Support\Facades\Redirect;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
class HomeController extends Controller
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
    public function index()
    {
        $posts = Post::orderBy('date_create','desc')->take(3)->get();
        return view('user.home',compact('posts'));
    }
}
