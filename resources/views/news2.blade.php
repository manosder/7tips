@extends('layouts.noparticles')

@section('content')
    <link rel="stylesheet" href="css/style-news2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        #toggle {
            height: 30px;
            width: 100px;
            ;
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
                    @foreach ($posts as $post)
                        <ul id="itemsToFilter">
                            <li data-type="{{ $post->category_id }}">
                                <div class="row border-dark">
                                    <div class="col-md-2" style="min-height:150px;">
                                        <img src="{{ asset(Voyager::image($post->image)) }}"
                                            style="width:120px; height:120px;">
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
                                                <h5>Category: {{ $post->v }}</h5>
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

                <div id="filters" class="col-4">
                    <div class="sidenav">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Filter By:</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="/news2"><i class="fa fa-remove" style="font-size:24px;color:#b63b4d"></i></a>
                            </div>
                        </div>
                        <hr>
                        <ul id="accordion" class="accordion">
                            <li>
                                <div class="link"><i class="fa fa-database"></i>Categories<i class="fa fa-chevron-down"></i>
                                </div>
                                <ul class="submenu">
                                    <form method="GET">
                                        @foreach ($categories as $categories)
                                            <li>
                                                <input id="r1" type="radio" name="category[]" value="{{ $categories->id }}"
                                                    onchange="this.form.submit()" />
                                                <label>&nbsp;{{ $categories->name }} </label>
                                            </li>
                                        @endforeach
                                        {{-- <input class="btn" type="submit"
                                            value="Filter" /> --}}
                                    </form>
                                </ul>
                            </li>
                            <li>
                                <div class="link"><i class="fa fa-hashtag"></i>Tags<i class="fa fa-chevron-down"></i></div>
                                <ul class="submenu submenutags">
                                    <form method="GET">
                                        <div class="tagbox1">
                                            @foreach ($tags as $tag)
                                                <li class="checkbox keep-open"><label><input type="checkbox" name="tag[]"
                                                            value="{{ $tag }}">&nbsp;{{ $tag }} </label></li>
                                            @endforeach
                                        </div>
                                        <input class="btn" type="submit" value="Filter" />
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="pagelinks text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript" src="js/script-news2.js"></script>
    --}}
    <script>
        //
        // radio button
        //
        document.getElementById("switch_id").addEventListener("change", function() {
            if (!this.checked) window.location.href = "/news";
        });

        $(document).ready(function() {
            $("#toggle").click(function() {
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


        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });

    </script>

@endsection
