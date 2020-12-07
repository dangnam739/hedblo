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
        $UserId = DB::table('users')->where('user_id','=', this->user_id);

        return new SearchResult(
            $this,
            $this->title,
            $this->date_create,

            $url
        );
    }
    protected $fillable = [
        'post_id',
        'title',
        'description',
        'content',
        'date_create'
    ];
}
