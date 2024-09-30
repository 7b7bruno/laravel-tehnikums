<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', ['allposts' => $posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['singlepost' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        
    }
}
