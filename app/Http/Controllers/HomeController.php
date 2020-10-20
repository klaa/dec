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
    public function index(Request $request)
    {
        echo "<h1>".$request->header("User-Agent")."</h1>";
        dd($request->header("User-Agent"));
        $numOfItems = 5;
        $items = Post::with('post_details','media','category','category.category_details')->where('category_id','=','1')->paginate($numOfItems);
        return view('classic.index',compact('items'));
    }
    public function contact()
    {
        return view('classic.lienhe');
    }
}
