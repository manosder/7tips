<link rel="stylesheet" href="css/style-news.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    .flex {
        margin-top: 90px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .aright {
        float: right;
        font-family: helvetica;
        text-decoration: none;
        text-transform: uppercase;
        color: black;
    }

    .aright a:hover {
        text-decoration: none;
        font-weight: bold;
        color: black;
    }




    .underlinehover *,
    *:after,
    *:before {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        text-decoration: none;
    }

    .underlinehover {
        margin-right: 20px;
        margin-top: -25px;
        padding: 0;
        border: 0 none;
        position: relative;
        outline: none;
        width: max-content;
    }

    .underlinehover a:before {
        content: "";
        color: black;
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background: red;
        visibility: hidden;
        border-radius: 5px;
        transform: scaleX(0);
        transition: .25s linear;
    }

    .underlinehover a:hover:before,
    .underlinehover a:focus:before {
        visibility: visible;
        transform: scaleX(1);
    }

    .post {
        padding-bottom: 25px;
    }

    .headline {
        padding-top: 25px;
        padding-bottom: 18px;
    }

    #news {
        min-height: 500px;
    }

    @keyframes hover-v {
        0% {
            transform: scaleX(0);
            height: 5px;
        }

        45% {
            transform: scaleX(1.05);
            height: 5px;
        }

        55% {
            height: 5px;
        }

        100% {
            transform: scaleX(1.05);
            height: 3.8rem;
        }
    }

    @keyframes no-hover-v {
        0% {
            transform: scaleX(1.05);
            height: 3.8rem;
        }

        45% {
            height: 5px;
        }

        55% {
            transform: scaleX(1.05);
            height: 5px;
            opacity: 1;
        }

        100% {
            transform: scaleX(0);
            height: 5px;
            opacity: .02;
        }
    }

    #news h2 {
        padding-left: 3.13rem;
        padding-right: 3.13rem;
        margin: 1.88rem 0 0;
        font-size: 3rem;
        line-height: 1.04em;
        text-align: center;
        top: -35px;
    }

    @media all and (max-width:700px) {
        .band {
            display: contents !important;
        }

        .card {
            max-width: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        #news h2 {
            color: black;
            font-size: 15px;
            text-align: center;
        }

        #news a {
            float: center;

        }
    }

    @media all and (max-width:498px) {
        .hidden-sm {
            display: none;
        }
    }

</style>

<div id="news" class="text-center bg-grey ">
    <!-- <div class="row underlinehover aright">
    <a href="/news" style="color:black;">Go to News <i class="fa fa-arrow-circle-right "></i></a>
  </div> -->
    <div class="row headline">
        <h2 class="hidden-sm">Latest News & Updates</h2>
        <div class="aright underlinehover">
            <a href="/blog" class="" style="color:black;">Go to News <i class="fa fa-arrow-circle-right "></i></a>
        </div>
    </div>

    {{-- <div class="row justify-content-center">

        <div class="aright underlinehover">
            <a href="/news" class="" style="color:black;">Go to News <i class="fa fa-arrow-circle-right "></i></a>
        </div>

    </div> --}}
    <div class="row">
        <div class="band">
            @foreach ($posts as $post)
                <div class="col-md-4 post">
                    <span class="glyphicon  logo3w-small"></span>
                    <a href="/post/{{ $post->slug }}" class="card ">
                        <div class="thumb" style="background-image: url({{ asset(Voyager::image($post->image)) }});">
                        </div>
                        <article>
                            <h4>{{ $post->title }}</h4>
                            <span></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
