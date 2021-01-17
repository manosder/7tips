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

Route::get('/news2', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->get();
    return view('wc.newsacc', compact('posts'));
});

Route::get('/news', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->get();
    return view('wc.news', compact('posts'));
});

Route::get('/accenture', function () {
    $posts = App\Post::orderBy('created_at', 'desc')->get();
    $categories = App\Category::all();
    return view('wc.accenture', compact('posts', 'categories'));
});
*/



Route::get('/', 'PageController@index');

Route::get('/blog', 'PageController@blogPage');

Route::get('post/{slug}', 'PageController@showPost');

Route::get('/search-results', ['uses' => 'SearchController@search', 'as' => 'search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
