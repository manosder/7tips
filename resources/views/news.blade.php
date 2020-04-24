@extends('layouts.noparticles')

@section('content')
<link rel="stylesheet" href="css/style-news.css">
<div class="topleft"> <label class="switch">
    <input id="switch_id" type="checkbox">
    <span class="slider round"><a href="/news2"></a></span>
  </label>
</div>
<div class="flex">
  <div class="row ">
    <div class="search-box">
      <input type="text" placeholder="Search...">
      <div class="search"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="band">
        @foreach($posts as $post)
        <div class="item-2">
          <a href="/post/{{ $post->slug }}" class="card">
            <div class="thumb" style="background-image: url({{ asset(Voyager::image( $post->image )) }});"></div>
            <article>
              <h1>{{ $post->title }}</h1>
              <span></span>
            </article>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/script-news.js"></script>
@endsection