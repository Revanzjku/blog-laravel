<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Post::with('category')
                ->latest()
                ->take(3)
                ->get();
        return view('blog.home', compact('articles'));
    }

    public function show($slug)
    {
        $article = Post::with('category')
                ->where('slug', $slug)
                ->firstOrFail();
        return view('blog.show', compact('article'));
    }

    public function article()
    {
        $articles = Post::with('category')
                ->get();
        return view('blog.article', compact('articles'));
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contact()
    {
        return view('blog.contact');
    }

    public function contactMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Message::create($request->all());

        return redirect()->route('blog.contact')->with('success', 'Pesan anda berhasil dikirim!');
    }
}
