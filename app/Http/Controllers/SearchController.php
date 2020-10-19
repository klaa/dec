<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostDetail;
use App\Student;

class SearchController extends Controller
{
    /**
     * Replaces spaces with full text search wildcards
     *
     * @param string $term
     * @return string
     */
    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);
 
        $words = explode(' ', $term);
 
        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 2) {
                $words[$key] = '+' . $word . '*';
            }
        }
 
        $searchTerm = implode(' ', $words);
 
        return $searchTerm;
    }

    public function search(Request $request) {
        return redirect()->route('result',urlencode($request->get('searchkey')));
    }

    public function result($keyword) {
        $numberOfItems = 15;
        $keyword = urldecode($keyword);
        $key = $this->fullTextWildcards($keyword);
        $items = Post::whereHas('post_details',function($q) use ($key) {
            $q->whereRaw("((MATCH (name) AGAINST (? IN BOOLEAN MODE)) > 0 OR (MATCH (body) AGAINST (? IN BOOLEAN MODE)) > 0)",[$key,$key]);
        })->with('post_details','media')->paginate($numberOfItems);
        
        // $items = PostDetail::whereRaw("((MATCH (name) AGAINST (? IN BOOLEAN MODE)) > 0 OR (MATCH (body) AGAINST (? IN BOOLEAN MODE)) > 0)",[$key,$key])->orderByRaw("(MATCH (name) AGAINST (? IN BOOLEAN MODE)) ASC, (MATCH (body) AGAINST (? IN BOOLEAN MODE)) ASC",[$key,$key])->paginate($numberOfItems);
        return view('classic.search',compact('items','keyword'));        
    }
}
