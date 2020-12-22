<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Posttag;
use App\Post;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # Get all tag
    function tags(Request $request)
    {
        $data = Tag::paginate(3);
        if ($request->ajax()) {
            return view('tag.tag_data', compact('data'))->render();
        }
        return view('tag.tags', compact('data'));
    }

    # Create new tag
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $tag = new Tag();
            $tag->tag_title = $request->title;
            $request->validate(['title' => "required|max:30|min:1|unique:tags,tag_title"]);
            $tag->save();
            return redirect('admin/home-page');
        }
        return view('tag.new');
    }

    # Get tag by id
    public function show($tag_id)
    {
        $tag = Tag::find($tag_id);
        $posts = $tag->posts->all();
        return view('tag.show')
                ->with(compact('tag', $tag))
                ->with(compact('posts', $posts));
    }

    # Edit post
    public function edit(Request $request,$tag_id){
        $tag = Tag::find($tag_id);
        if($request->isMethod('post')){
            $request->validate(['title' => "required|max:30|min:3|unique:tags,tag_title"]);
            $tag->tag_title = $request->title;
            $tag->save();
            return redirect('admin/home-page');
        }
        return view('tag.edit',compact('tag'));
    }

    # Delete tag
    public function delete($tag_id)
    {
        Tag::where('tag_id', $tag_id)->delete();
        return redirect('/admin/home-page');
    }
}
