<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use DB;


class Post extends Model implements Searchable
{
    protected $table = "posts";
    protected $primaryKey = 'post_id';
    public $timestamps = false;
    protected $connection = '';

    public function getSearchResult(): SearchResult
    {
        $url = route('post.show', $this->post_id);
        // $UserId = DB::table('users')->where('user_id','=', this->user_id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'post_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
