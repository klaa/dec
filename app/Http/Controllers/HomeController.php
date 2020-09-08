<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numOfItems = 5;
        $items = Post::with('post_details','media','category','category.category_details')->where('category_id','=','1')->paginate($numOfItems);
        return view('classic.index',compact('items'));
    }
    public function contact()
    {
        return view('classic.lienhe');
    }
}
