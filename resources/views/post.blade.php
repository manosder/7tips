<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('parts.head')

<body>
  <!--Navbar-->
  @include('parts.navbar')
  <!--/.Navbar-->

  @include('article')


  @include('parts.scripts')

</body>

</html>