@extends('layouts.noparticles')

@section('content')
<link rel="stylesheet" href="css/style-news2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
  /* .filters ul{
    display: block;
  } */
#toggle{
  height: 30px;
  width: 100px;;
}
@media screen and (max-width: 1200px) {
  #toggle{
  display: none;
}
}
.dropdown-menu > li.checkbox{
      padding: 3px 20px;
    }
    .dropdown-menu>li>input {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    width: -webkit-fill-available;
    background: white;
    }
    .dropdown-menu>li>input:hover {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    width: -webkit-fill-available;
    background:rgb(245,245,245);
    }
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
        </button>
      </form>
    </div>
    <input type="button" data-name="show" value="Show Filters" id="toggle">
  </div>
  <div class="container bg-gray ">
    <div class="row border-dark wrapper">
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
      <div id="filters" class="col-4 rfloat putup wrapper">
        <ul class="filters">
          <li>
            <div class="categories">
              <br>
              <form method="GET"> 
                <span class="dropdown">
                  <span class="glyphicon glyphicon-filter dropdown-toggle" data-toggle="dropdown" aria-expanded="true"></span>
                  <!-- modal -->
                  <ul class="dropdown-menu" role="menu">
                    <div class="tagbox1">             
                      <ul>
                        @foreach ($categories as $categories)
                        <li>
                          <input id="r1" type="radio" name="category[]" value="{{ $categories->id }}">
                          <label for="r1">{{$categories->name}}&nbsp;&nbsp; </label>
                        </li>
                        @endforeach   
                      </ul>
                    </div>
                    {{-- <li><a class="btn" type="submit">select</a></li> --}}
                    <li><input class="btn" type="submit"  value="Filter"/></li>
                  </ul>
                </span>   
              {{-- <br>
                <input type="submit" class="btn btn-default" value="Filter"/> --}}
              </form>
            </div>
          </li>
          <hr class="line"/>&nbsp;&nbsp;
          <li>
            <div class="categories">
              <br>          
              <form method="GET" >
                <span class="dropdown">
                  <span class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i style="font-size:24px" class="fa">&#xf292;</i></span>
                  <!-- modal -->
                  <ul class="dropdown-menu" role="menu">
                    <div class="tagbox1">
                    @foreach($tags as $tag)   
                    <li class="checkbox keep-open"><label><input type="checkbox" name="tag[]" value="{{$tag}}">&nbsp;{{$tag}} </label></li>
                    @endforeach
                  </div>
                    {{-- <li><a class="btn" type="submit">select</a></li> --}}
                    <li><input class="btn" type="submit"  value="Filter"/></li>
                  </ul>
                </span>
                  {{-- <i style="font-size:24px" class="fa">&#xf292;</i>
                  <div class="tagbox">
                  @foreach($tags as $tag)              
                    <input type="checkbox" name="tag[]" value="{{$tag}}"/> &nbsp;{{$tag}} <br />          
                  @endforeach
                </div>
                <br> --}}
                {{-- <div class="form-group">
                  <input type="submit" class="btn btn-default" value="Filter"/>
                </div> --}}
              </form>
            </div> 
          </li>
        </ul>
      </div>
    </div>
    <div class="pagelinks text-center">
      {{ $posts->links() }}      <a href="/news2"><i class="fa fa-remove" style="font-size:24px;color:#2196f3">Remove Filters</i></a>
    </div>
  </div>
</div>
{{-- <script type="text/javascript" src="js/script-news2.js"></script> --}}
<script>//
  // radio button
  //
  document.getElementById("switch_id").addEventListener("change", function() {
      if (!this.checked) window.location.href = "/news";
  });

  $(document).ready(function () {
		    $("#toggle").click(function () {
		        if ($(this).data('name') == 'show') {
		            $("#filters").animate({
		                width: '0%'
		            }).hide()
		            $("#wrapper").animate({
		                width: '100%'
		            });
		            $(this).data('name', 'hide')
		        } else {
		            $("#filters").animate({
		                width: '19%'
		            }).show()
		            $("#wrapper").animate({
		                width: '80%'
		            });
		            $(this).data('name', 'show')
		        }
		    });
		});


    $('.keep-open').click(function(e) {
      if (/input|label/i.test(e.target.tagName)){
        var parent = $(e.target).parent();
        if(parent.hasClass('checkbox')){
          var checkbox = parent.find('input[type=checkbox]');
          checkbox.prop("checked", !checkbox.prop("checked"));
          return false;
        }
      }
    });
  </script>

@endsection