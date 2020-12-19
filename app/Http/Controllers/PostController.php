<?php

namespace App\Http\Controllers;

use App\Tag;
use App\User;
use App\UserPostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\SESSION;
use App\Http\Requests;
use App\Post;
use App\PostTag;
use phpDocumentor\Reflection\Types\Compound;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

session_start();

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # Get all post
    function all_post(Request $request){
        $posts = Post::paginate(3);
        if($request->ajax()){
            return view('post.post_data', compact('posts'))->render();
        }
        return view('post.posts', compact('posts'));
    }

    # Get post by id
    public function post_detail($post_id){
        $post = Post::find($post_id);
        $recent_posts = Post::where('post_id','!=',$post_id)->orderBy('date_create','desc')->take(3)->get();

        $comment_count = DB::table('comments')
                            ->join('posts','comments.post_id','=','posts.post_id')
                            ->where('posts.post_id','=',$post_id)
                            ->count();

        $comments = DB::table('comments')
                    ->join('posts','comments.post_id','=','posts.post_id')
                    ->join('users','comments.user_id','=','users.user_id')
                    ->where('posts.post_id','=',$post_id)
                    ->select('comments.content','users.user_name','users.avatar_url')
                    ->get();


        $current_user = User::find(auth()->user()->user_id);
        return view('post.post_detail',compact('post','recent_posts','comment_count','comments','current_user'));
    }

    # Get post by tag_id
    public function post_tag(Request $request, $tag_id){
        $posts = Post::whereHas('tags', function($query) use ($tag_id) {
            $query->where('tags.tag_id', $tag_id);
        })->paginate(3);

        $tag = Tag::find($tag_id);
        $title = strtoupper($tag->tag_title);

        Session::put('title',$title);
        if($request->ajax()){
            return view('post.post_data', compact('posts'))->render();
        }
        return view('post.posts',compact('posts'));
    }

    # Create new post
    public function create(Request $request){
        $current_user = User::find(auth()->user()->user_id);
        if($request->isMethod('post')){
            $post = new Post();
            $post->user_id = $current_user->user_id;
            $post->title = $request->title;

            if ($request->hasFile('post_url')) {
                $filenameWithExt = $request->file('post_url')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('post_url')->getClientOriginalExtension();
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('post_url')->storeAs('public/post_url', $filenameToStore);
                $post->post_url = $filenameToStore;
            }

            $post->content = $request->detail_content;
            $post->description = $request->description;
            $post->date_create = date('Y-m-d');
            $post->save();

            $post_id = $post->post_id;

            $tags = $request->tags;
            foreach ($tags as $tag_id) {
                // $post_tag = new PostTag();
                // $post_tag->post_id = $post_id;
                // $post_tag->tag_id = $tag_id;
                // $post_tag->save();
                $post->tags()->attach($tag_id);
            }
            return redirect('/posts/'.$post_id);
        }
        return view('post.create_post');
    }

    # Edit post
    public function edit(Request $request,$post_id){
        $post = Post::find($post_id);

        $selected_tags_array = array();
        foreach ($post->tags as $selected_tag){
            array_push($selected_tags_array, $selected_tag->tag_id);
        }

        if($request->isMethod('post')){
            $post = Post::find($post_id);
            $post->title = $request->title;

            if ($request->hasFile('post_url')) {
                $filenameWithExt = $request->file('post_url')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('post_url')->getClientOriginalExtension();
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('post_url')->storeAs('public/post_url', $filenameToStore);
                $post->post_url = $filenameToStore;
            }

            $post->content = $request->detail_content;
            $post->description = $request->description;
            $post->date_create = date('Y-m-d');

            $post_tag_list = PostTag::where('post_id',$post_id);
            $post_tag_list->delete();
            $tags = $request->tags;
            foreach($tags as $tag_id){
                $post_tag = new PostTag();
                $post_tag->post_id = $post_id;
                $post_tag->tag_id = $tag_id;
                $post_tag->save();
            }
            $post->save();
            return redirect('/posts/'.$post_id);
        }
        return view('post.edit_post',compact('post','selected_tags_array'));
    }

    # Delete post
    public function delete($post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/posts');
    }

    #add comment
    public function add_comment(Request $request)
    {
        $comments = DB::table('comments')->get();
        if ($request->isMethod('post')) {
            $dataa = array();
            $dataa["post_id"] = $request->post_id;
            $dataa["user_id"] = $request->user_id;
            $dataa["content"] = $request->content;
            DB::table("comments")->insert($dataa);
        }
        return redirect("/posts/{$request->post_id}");
    }
}
