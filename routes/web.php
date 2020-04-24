<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->take(3)->get();
    return view('app', compact('posts'));
});

Route::get('/news', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->get();
    return view('news', compact('posts'));
});

Route::get('/news2', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->get();
    return view('newsacc', compact('posts'));
});

Route::get('/search-results', ['uses' => 'SearchController@search', 'as' => 'search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('post/{slug}', function ($slug) {
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});
