<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{

  public function search(Request $request)
  {
    $title = $_GET['q'];
    $body = $_GET['q'];
    $translation = htmlentities($body, ENT_QUOTES);


    $posts = \App\Post::where(
      'title',
      'LIKE',
      '%' . $title . '%'
    )->orWhere('body', 'like', '%' . $translation . '%')->get();


    $bold = preg_replace("/($translation)/i", "<b></b>", $posts);


    return view('search-results', compact('posts'));
  }
}
