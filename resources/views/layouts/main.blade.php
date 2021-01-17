<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('parts.head')
</head>


<body>
    <!--Navbar-->
    @include('parts.navbar')

    <!--/.Navbar-->
    <section class="home">
        @section('particles')
            <div id="particles-js" style="width: 100%; height: 50%;"></div>
            <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        @show
    </section>
    <hr>
    <!--Main layout-->

    <div class="container full-width">
        @yield('content')


    </div>
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <!-- scripts -->
    @include('parts.scripts')
    <!-- Site footer -->
    @include('parts.footer')


</body>

</html>
