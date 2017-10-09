<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Simbiothink</title>
    @include('includes.assets-dev')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <body>
    <div id="nav-index">
      <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse cl-effect-5" id="menu">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/" class="navbar-brand">
          <img class="img-responsive" src="/img/simbiothink-menu.svg">
        </a>
        <div class="collapse navbar-collapse" data-toggle="collapse" id="mobile-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link animsition-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animsition-link" href="/nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animsition-link" href="/proyectos">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animsition-link" href="/contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    @yield('content')
    <script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://use.fontawesome.com/c2cb58b61d.js"></script>
    <script src="/js/animsition.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/wow.min.js" type="text/javascript"></script>
    <script src="/js/vegas.min.js" type="text/javascript"></script>
    <script src="/js/jquery.paroller.js" type="text/javascript"></script>
    <script src="/js/anime.min.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <script src="/js/main.js" type="text/javascript"></script>
  </body>
</html>
