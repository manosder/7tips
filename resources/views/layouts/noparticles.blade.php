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

    </section>
    <hr>
    <!--Main layout-->
    <main class="mt-5">
        <div class="container full-width">
            @yield('content')


        </div>
        <!-- Return to Top -->
        <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    </main>
    <!-- scripts -->
    @include('parts.scripts')
    <!-- Site footer -->
    @include('parts.footer')


</body>

</html>