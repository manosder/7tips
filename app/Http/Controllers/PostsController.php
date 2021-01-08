<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('wc.test')->with('posts', $posts);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('article')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showPosts(Request $request)
    {
        $selectedCategories = $request->category;
        $selectedTags = $request->tag;
        // $words = implode(",", $selectedTags);
        // dd($words);
        function getPosts($selectedCategories, $selectedTags)
        {
            if (empty($selectedCategories) && empty($selectedTags)) {
                return Post::with('category');
            } elseif (empty($selectedCategories) && !empty($selectedTags)) {
                $words = implode(",", $selectedTags);
                return Post::where('meta_keywords', 'like', "%{$words}%");
            } elseif (!empty($selectedCategories) && empty($selectedTags)) {
                return Post::whereIn('category_id', $selectedCategories);
            }
        }

        // $posts = empty($selectedCategories)
        //     ? Post::with('category')
        //     : Post::whereIn('category_id', $selectedCategories);

        $posts = getPosts($selectedCategories, $selectedTags);

        $tags = $posts->get()
            ->flatMap(function ($post) {
                return $post->metaKeywords();
            })
            ->unique();

        return view('news2', [
            'categories' => Category::all(),
            'posts' => $posts->orderBy('created_at', 'desc')->paginate(3),
            'tags' => $tags,
        ]);
    }
}
