<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}} - Simbiothink</title>
    @include('includes.assets-dev')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>document.documentElement.className = 'js';</script>
    <!--[if lte IE 9]>
      <div class="browsehappy">
          <div class="center-container">
              <div class="center-content">
                  <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
              </div>
          </div>
      </div>
    <!-- <![endif]-->

  </head>
  <body class="animsition">
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse cl-effect-5" id="menu">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/" class="navbar-brand">
        <img class="img-responsive" src="/img/simbiothink-menu.svg">
      </a>
      <div class="collapse navbar-collapse" id="mobile-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link animsition-link" href="/">
              <span data-hover="Inicio">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="/nosotros">
              <span data-hover="Nosotros">Nosotros</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="/proyectos">
              <span data-hover="Proyectos">Proyectos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="/contacto">
              <span data-hover="Contacto">Contacto</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
    <div class="container-fuild f-project" id="footer">
      <div class="row no-gutters">
        <div class="col-md-5 col-sm-12 logo">
          <img src="/img/simbiothink.svg">
        </div>
        <div class="col-md-3 col-sm-6 centrado-moviles">
          <p><a href="/" class="link">INICIO</a></p>
          <p><a href="/nosotros" class="link">NOSOTROS</a></p>
          <p><a href="/proyectos" class="link">PROYECTOS</a></p>
          <p><a href="/contacto" class="link contacto">ESCRÍBENOS</a></p>
        </div>
        <div class="col-md-4 col-sm-6 centrado-moviles ver-align">
          <p class="titulo m-bottom">CONTACTO</p>
          <p class="m-bottom"><a href="tel:4625991010" class="datos-contacto">(462) 599 1010</a></p>
          <p class="m-bottom"><a href="tel:4621498756" class="datos-contacto">(462) 149 8756</a></p>
          <p class="m-bottom"><a href="tel:4171077802" class="datos-contacto">(417) 107 7802</a></p>
          <p class="m-bottom"><a href="/contacto" class="datos-contacto">contacto@simbiothink.com</a></p>
          <p>
            <a href="https://www.facebook.com/simbiothink">
              <i class="fa fa-facebook social" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/simbiothink/">
              <i class="fa fa-instagram social" aria-hidden="true"></i>
            </a>
          </p>
        </div>
      </div>
    </div>

    <script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://use.fontawesome.com/c2cb58b61d.js"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/jquery.paroller.js" type="text/javascript"></script>
    <script src="/js/wow.min.js" type="text/javascript"></script>
    <script src="/js/vegas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('#vista-proyecto').vegas({
            delay: 5000,
              slides: [
                @foreach($album->Photos as $photo)
                { src: "/img/{{ $photo->image }}"},
                @endforeach
              ],
              walk: function (index, slideSettings) {
                var slideshow = $("#vista-proyecto").vegas('options', 'slides');
                var currentSlide = $("#vista-proyecto").vegas('current');
                $('.circle').each(function(index) {
                  if (this.id == currentSlide)
                    $(this).addClass('active');
                  else
                    $(this).removeClass('active');
                });
              }
          });
      $('#previous').on('click', function () {
          $('#vista-proyecto').vegas('options', 'transition', 'slideRight2').vegas('previous');
      });

      $('#next').on('click', function () {
          $('#vista-proyecto').vegas('options', 'transition', 'slideLeft2').vegas('next');
      });
    </script>
    <script src="/js/animsition.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
      $('.animsition').animsition();
    });
  </script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/anime.min.js" type="text/javascript"></script>
    <script src="/js/main.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <script src="/js/main.js" type="text/javascript"></script>
  </body>
</html>
