<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Searchable;
use DB;
use App\User;
use App\Post;
use App\Tag;
use App\PostTag;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
#session_start();
class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $tags = Tag::all();
        $number_of_users = User::count();
        $number_of_posts = Post::count();
        $number_of_tags = Tag::count();
        return view('admin.home')
            ->with(compact('number_of_users', $number_of_users))
            ->with(compact('number_of_posts', $number_of_posts))
            ->with(compact('number_of_tags', $number_of_tags))
            ->with(compact('users', $users))
            ->with(compact('posts', $posts))
            ->with(compact('tags', $tags));
    }

    // public function show_user()
    // {
    //     $users = User::all();
    //     return view('admin.user_show')->with(compact('users', $users));
    // }

    public function change_pass(Request $request)
    {
        if ($request->isMethod('post')) {
        }
        return view('admin.change_pass');
    }
}
