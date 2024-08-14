<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        return view('blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create ()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
        $title = $request->title;
        $contents = $request->contents;
        $current_user = $request->user()->id;


        $blogPost = Blogs::create([
            'user_id' => $current_user,
            'title' => $title,
            'contents' => $contents
        ]);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show (string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit (string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update (Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy (string $id)
    {
        //
    }
}
