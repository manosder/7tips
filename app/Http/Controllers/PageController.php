<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use PhpParser\Node\Expr\FuncCall;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('app', compact('posts'));
    }

    public function blogPage()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::all();

        $noOfPosts = count(Post::all());

        return view('blog', compact('posts', 'categories', 'noOfPosts'));
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('post', compact('post'));
    }
}
