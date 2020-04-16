<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>7Tips</title>
  <link rel="icon" href="images\logosm.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

   <!-- Material Design Bootstrap -->
   <!-- <link rel="stylesheet" href="css/mdb.min.css"> -->
   <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--Navbar-->
  @include('parts.navbar')
  <!--/.Navbar-->
  <section class="home">
      @include('parts.particles')
  </section>
  <hr>
  <!--Main layout-->
  <main class="mt-5">
      <div class="container full-width">
          <!-- Container (About Section) -->
          @include('parts.about')
          <hr class="my-5">
          <!--Section: Services -->
          @include('parts.services')
          <!-- Container (Services Section) -->
         <hr class="my-5">
         <!--Section: News & Updates -->
         @include('parts.news')
         <!-- Container (News & Updates) -->
         <hr class="my-5">
          <!-- Container (Contact Section) -->
          @include('parts.contact')
          <!-- Image of location/map
          <img src="/images/location.png">-->
      </div>
      <!-- Return to Top -->
      <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


  </main>
  <!--Main layout-->

  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <script type="text/javascript" src="js/script.js"></script>

  <footer>
    @include('parts.footer')
  </footer>
</body>
</html>
