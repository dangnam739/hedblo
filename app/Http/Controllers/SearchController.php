<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Http\Controllers\Controller;
use Spatie\Searchable\ModelSearchAspect;


class SearchController extends Controller
{
    /**
     * Display list of products
     *
     * @return view
     */
    public function index()
    {
        return view('search.searchPost');
    }

    /**
     * search records in database and display  results
     * @param  Request $request
     * @return view
     */
    public function search(Request $request)
    {

        $searchterm = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(\App\Post::class, ['title', 'content']) //apply search on field name and description
            //Config partial match or exactly match
            // ->registerModel(\App\Category::class, function (ModelSearchAspect $modelSearchAspect) {
            //     $modelSearchAspect
            //         ->addExactSearchableAttribute('name') // only return results that exactly match
            //         ->addSearchableAttribute('description'); // return results for partial matches
            // })
            ->perform($searchterm);

        return view('search.searchPost', compact('searchResults', 'searchterm'));
    }
}