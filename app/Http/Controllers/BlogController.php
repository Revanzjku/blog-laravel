<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Post::with('category')->latest()->take(3)->get();
        return view('blog.home', compact('articles'));
    }

    public function show(Post $post)
    {
        $post->get();
        return view('blog.show', compact('post'));
    }
}
