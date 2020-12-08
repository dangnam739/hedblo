<?php

namespace App\Http\Controllers;

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
    # Get all post
    function all_post(Request $request){
        $data = DB::table('posts')->paginate(3);
        if($request->ajax()){
            return view('user.post_data', compact('data'))->render();
        }
        return view('user.posts', compact('data'));
    }

    # Get post by id
    public function post_detail($post_id){
        $data = DB::table('posts')->where('post_id',$post_id)->get();
        $recent_posts = DB::table('posts')->where('post_id','!=',$post_id)->orderBy('date_create','desc')->limit(3)->get();


        return view('user.post_detail',
            compact('data','recent_posts'));
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
            return view('user.post_data', compact('data'))->render();
        }
        return view('user.posts',compact('data'));
    }

    # Create new post
    public function create(Request $request){
        if($request->isMethod('post')){
            $post = new Post();
            $post->user_id = 1;
            $post->title = $request->title;
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
            return redirect('/posts');
        }
        return view('user.create_post');
    }

    # Edit post
    public function edit(Request $request,$post_id){
        $posts = DB::table('posts')->where('post_id',$post_id)->get();
        $selected_tags = DB::table('post_tag')->where('post_id',$post_id)->get();

        if($request->isMethod('post')){
            $data = array();
            $data["title"] = $request->title;
            $data["content"] = $request->detail_content;
            $data["description"] = $request->description;
            $data["date_create"] = date('Y-m-d');
            DB::table("posts")->where('post_id',$post_id)->update($data);

            return redirect('/posts/'.$post_id);
        }

        return view('user.edit_post',compact('posts'))->with('selected_tags',$selected_tags);
    }

    # Delete post
    public function delete($post_id){
        DB::table('post_tag')->where('post_id',$post_id)->delete();
        DB::table('posts')->where('post_id',$post_id)->delete();
        return redirect('/posts');
    }
}
