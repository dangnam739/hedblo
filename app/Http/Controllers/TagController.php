<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # Get all tag
    function tags(Request $request){
        $data = Tag::paginate(3);
        if($request->ajax()){
            return view('tag.tag_data', compact('data'))->render();
        }
        return view('tag.tags', compact('data'));
    }

    # Create new tag
    public function create(Request $request){
        if($request->isMethod('post')){
            $tag = new Tag();
            $tag->tag_title = $request->title;
            $tag->save();
            return redirect('admin/home-page');
        }
        return view('tag.new');
    }

    # Get post by id
    // public function tag_detail($tag_id){
    //     $data = Tag::find($tag_id);
    //     return view('tag.tag_detail',compact('data'));
    // }

    // # Get tag by post_id
    // public function tag_post(Request $request, $post_id){
    //     $data = DB::table('tags')
    //                 ->join('post_tag','tags.tag_id','=','post_tag.tag_id')
    //                 ->where('post_tag.post_id','=',$post_id)
    //                 ->paginate(3);
    //     return view('tag.tag_details',compact('data'));
    // }

    

    // # Edit post
    // public function edit(Request $request,$tag_id){
    //     $tag = DB::table('tags')->where('tag_id',$tag_id)->get();
        
    //     if($request->isMethod('post')){
    //         $tag->tag_title = $request->title;
    //         $tag->save();
    //         return redirect('/tags/'.$tag_id);
    //     }

    //     return view('post.edit_tag',compact('tag'));
    // }

    # Delete tag
    public function delete($tag_id){
        Tag::where('tag_id',$tag_id)->delete();
        return redirect('/admin/home-page');
    }
}
