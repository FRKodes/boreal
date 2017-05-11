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
        <script>
            $('.news-container').slick({
              dots: true,
              infinite: true,
              speed: 300,
              autoplay: true,
              autoplaySpeed: 5000,
              arrows: false,
              slidesToShow: 3,
              responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
                ]
            });

            $('.facts-container').slick({
              dots: true,
              infinite: true,
              speed: 300,
              autoplay: true,
              autoplaySpeed: 5000,
              arrows: false,
              slidesToShow: 3,
              responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
                ]
            });
            $( document ).ready(function() {
                $( window ).scroll(function() {
                  var vertical_position = $('body').scrollTop();
                  if (vertical_position >=1) {
                    $('.navbar').addClass('transparent');
                  }else{
                    $('.navbar').removeClass('transparent');
                  };
                });
            });
        </script>
        <script src="js/app.js"></script>
    </body>
</html>
