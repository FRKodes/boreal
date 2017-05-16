<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials.metas')
        <link href="css/icons-font.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">        
    </head>
    <body>
        <header>@include('partials.nav')</header>
        <section>@yield('content')</section>
        <footer>@include('partials.footer')</footer>
        <script src="js/jquery.js"></script>
        <script src="js/slick.js"></script>

        @yield('custom_scripts')
        <script>
          $( document ).ready(function() {
              $( window ).scroll(function() {
                var vertical_position = $('body').scrollTop();
                if (vertical_position >=1) {
                  $('.navbar').addClass('transparent');
                }else{
                  $('.navbar').removeClass('transparent');
                };

                if (vertical_position >= 350) {
                  $('.chart').removeClass('inactive').addClass('active');
                };
              });
          });
        </script>
        <script src="js/app.js"></script>
    </body>
</html>
