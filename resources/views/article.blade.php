<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.flex {
  margin-top: 50px;
  min-height: 700px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.navbar {
    background-color: white;
    z-index: 9999;
    border: 10;
    font-size: 1.3rem;
    color: #000;
    font-family: 'Poppins',sans-serif;
    font-weight:300;
    border-radius: 0;
    padding: 10px;
  }
  .navbar li a, .navbar {
    color: 	#282828 !important;
    height: auto;

  }
  .navbar-brand {
    margin-left: 10px;
  }
  .navbar-default .navbar-brand {
      color: #020202;
      weight:bold;
      font-size: 2rem;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: red !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
.navbar-right {
  padding-right: 0;
}

.article h1 {
  margin-top: 100px;
}
.back-btn {
  color:black !important;
  position: fixed;
  top: 120px;
  right: 70px;
}
.underlinehover *, *:after, *:before {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  text-decoration: none;
}
.underlinehover {margin:0;padding:0;border:0 none;position: relative; outline: none;
}
 .underlinehover a:before {
  content: "";
  color:black;
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
@keyframes hover-v {
  0% {
      transform: scaleX(0);
      height: 5px;
     }
  45% {
      transform: scaleX(1.05);
      height: 5px;
     }
  55% {height: 5px;}
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
  45% {height: 5px;}
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
@media all and (max-width:700px){
	img {
    max-width:400px !important;
  }
  .back-btn {
    color:white !important;
    position: absolute;
    top: 120px;
    right:10px;

  }

}
</style>


<div class="container full-width">
  <div class="row">
  <div class="flex underlinehover aright">
    <div class="col-md-8 col-md-offset-2 article">
      <h1>{{ $post->title }}</h1>
      <img src="{{ asset(Voyager::image( $post->image )) }}" style="width:100%;height:250px; ">
      <p>{!! $post->body !!}</p>
    </div>
    <a href="/news" class="back-btn">Go to News </a>
  </div>
</div>
