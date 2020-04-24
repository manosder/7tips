@extends('layouts.noparticles')

@section('content')
<link rel="stylesheet" href="css/style-news2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>

</style>
<div class="topleft">
  <label class="switch">
    <input id="switch_id" type="checkbox" checked>
    <span class="slider round"><a href="/news2"></a></span>
  </label>
</div>

<div class="flex">
  <div class="jumbotron">
    <div class="search-container">
      <form action="/search-results" method="GET" class="swidth" role="search" style="width: 40%;">
        {{ csrf_field() }}
        <input type="text" placeholder="Search.." name="q">
        <button class="searchbutton" type="submit">
          <span class="search-icon"><i class="fa fa-search"></i></span>
          <span class="search-text">Search</span>
        </button>
      </form>
    </div>
  </div>
  <div class="container bg-gray ">
    <div class="row flexy">
      <div class="col-8 generated">
        @foreach($posts as $post)
        <ul id="itemsToFilter">
          <li data-type="{{ $post->category_id}}">
            <div class="row border-dark">
              <div class="col-md-2" style="min-height:150px;">
                <img src="{{ asset(Voyager::image( $post->image )) }}" style="width:120px; height:120px;">
              </div>
              <div class="col-md-1">
              </div>
              <div class="col-md-8">
                <!-- <hr class="hrfilter2"> -->
                <div class="">
                  <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
                </div>
                <div class="">
                  <p>{{ $post->excerpt }}</p>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <h5>Category: {{ $post->seo_title }}</h5>
                  </div>
                  <div class="col-sm-1vl"></div>
                  <div class="col-sm-6">
                    <h5>Published at : {{ $post->created_at }}</h5>
                  </div>
                </div>
              </div>

            </div>
          </li>
        </ul>
        @endforeach
      </div>
      <div class="vl"></div>
      <div class="col-4 rfloat">
        <div class="filterbox2">
          <ul class="filterSection">
            <strong>Filter by Category:</strong>
            <hr>
            <li>
              <label>Espa</label>
              <input checked="true" type="checkbox" value="1" />
            </li>
            <li>
              <label>Drasi</label>
              <input checked="true" type="checkbox" value="2" />
            </li>
            <li>
              <label>Vrasi</label>
              <input checked="true" type="checkbox" value="3" />
            </li>
          </ul>
        </div>
        <!-- <div class="filterbox"> -->
        <form method="GET" role="search" action="/news2" name="tagfilter" id="tags_form">
          <div class="form-group">
            <strong>#Tags</strong>
            <hr>
            <select id="tag" name="tags[]" multiple class="form-control">
              @foreach($posts as $post)
              <?php
              $tags = explode(',', $post->meta_keywords);
              foreach (array_values($tags) as $tag) {
                if ($tag != "") {
                  echo "<li><option>  $tag </option></li>";
                }
              }
              ?>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-info" name="submit" value="Submit" />
          </div>
        </form>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/script-news2.js"></script>
@endsection