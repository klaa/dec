<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with(['category_details'=>function($query) {
            $query->where('language','like',app()->getLocale());
        }])->where('category_type','regulation')->where('published',1)->get();
        // dd($categories);
        return view('classic.regulations',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $regulation
     * @return \Illuminate\Http\Response
     */
    public function show(Post $regulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $regulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $regulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $regulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $regulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $regulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $regulation)
    {
        //
    }
}
