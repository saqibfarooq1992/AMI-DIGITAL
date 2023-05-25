<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostServices;
use App\Traits\Jsonify;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use Jsonify;

    private $postServices;
    public function __construct(PostServices $postServices)
    {
        $this->postServices = $postServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    
    public function run($usd)
    {
        $post = $this->postServices->run($usd);
        return $post;
    }
}
