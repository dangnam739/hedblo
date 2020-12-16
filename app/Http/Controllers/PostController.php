<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Post;
use App\PostTag;
use phpDocumentor\Reflection\Types\Compound;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # Get all post
    function all_post(Request $request){
        $data = DB::table('posts')->paginate(3);
        if($request->ajax()){
            return view('post.post_data', compact('data'))->render();
        }
        return view('post.posts', compact('data'));
    }

    # Get post by id
    public function post_detail($post_id){
        $data = DB::table('posts')->where('post_id',$post_id)->first();

        $recent_posts = DB::table('posts')->where('post_id','!=',$post_id)->orderBy('date_create','desc')->limit(3)->get();
        $user_author = DB::table('users')
                            ->join('posts','users.user_id','=','posts.user_id')
                            ->where('posts.post_id','=',$post_id)
                            ->first();

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

        return view('post.post_detail',compact('user_author','data','recent_posts','comment_count','comments','current_user'));
    }

    # Get post by tag_id
    public function post_tag(Request $request, $tag_id){
        $data = DB::table('posts')
                    ->join('post_tag','posts.post_id','=','post_tag.post_id')
                    ->where('post_tag.tag_id','=',$tag_id)
                    ->paginate(3);
        $tag = DB::table('tags')->where('tag_id',$tag_id)->get()->first();
        $title = strtoupper($tag->tag_title);
        Session::put('title',$title);
        if($request->ajax()){
            return view('post.post_data', compact('data'))->render();
        }
        return view('post.posts',compact('data'));
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
            foreach($tags as $tag_id){
                $post_tag = new PostTag();
                $post_tag->post_id = $post_id;
                $post_tag->tag_id = $tag_id;
                $post_tag->save();
            }
            return redirect('/posts/'.$post_id);
        }
        return view('post.create_post');
    }

    # Edit post
    public function edit(Request $request,$post_id){
        $posts = DB::table('posts')->where('post_id',$post_id)->get();
        $selected_tags = DB::table('post_tag')->where('post_id',$post_id)->get();

        if($request->isMethod('post')){
            $data = array();
            $data["title"] = $request->title;

            if ($request->hasFile('post_url')) {
                $filenameWithExt = $request->file('post_url')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('post_url')->getClientOriginalExtension();
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('post_url')->storeAs('public/post_url', $filenameToStore);
                $data["post_url"] = $filenameToStore;
            }

            $data["content"] = $request->detail_content;
            $data["description"] = $request->description;
            $data["date_create"] = date('Y-m-d');
            DB::table("posts")->where('post_id',$post_id)->update($data);

            return redirect('/posts/'.$post_id);
        }

        return view('post.edit_post',compact('posts'))->with('selected_tags',$selected_tags);
    }

    # Delete post
    public function delete($post_id){
        DB::table('post_tag')->where('post_id',$post_id)->delete();
        DB::table('posts')->where('post_id',$post_id)->delete();
        return redirect('/posts');
    }

    #add comment
    public function add_comment(Request $request){
        $comments = DB::table('comments')->get();
        if($request->isMethod('post')){
            $dataa = array();
            $dataa["post_id"] = $request->post_id;
            $dataa["user_id"] = $request->user_id;
            $dataa["content"] = $request->content;
            DB::table("comments")->insert($dataa);
        }
        return redirect("/posts/{$request->post_id}");
    }
}
