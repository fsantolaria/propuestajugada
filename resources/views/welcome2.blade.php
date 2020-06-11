<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>propuestajugada.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Propuesta Jugada</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
		@if (Route::has('login'))
			 <!-- <div class="top-right links"> -->
                    @auth
						<li class="nav-item active">
							<a class="nav-link" href="{{ url('/home') }}">Inicio</a>
						</li>
                    @else
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('login') }}">Inicio</a>
						</li>

                        @if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">Sucribirse</a>
							</li>
                        @endif
                    @endauth
                <!-- </div> -->
            @endif

      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="/assets/img/sidebar-5.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Planes Disponibles</h1>
            <p>Plan Bronce, Plata y Oro son planes de Riesgo, que  brindan la posibilidad de jugar semanalmente un numero de una importarte loteria mundial, ademas de ahorrar.</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Suscribirse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="/assets/img/sidebar-7.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
        <div class="container">
          <div class="carousel-caption">
            <h1>Servicios</h1>
            <p>En base a los planes de suscripción se </p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Suscribirse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="/assets/img/sidebar-9.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></img>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Seguros</h1>
            <p>Plan Plata es un plan de Riesgo, se juega semanalmete dos numeros de una importarte loteria mundial.</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Suscribirse</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Plan Bronce</h2>
        <p>Plan Bronce es un plan de Riesgo, se juega un numero de una importarte loteria mundial.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Plan Bronce &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Plan Plata</h2>
        <p>Plan Plata es un plan de Riesgo, se juegan dos numeros de una importarte loteria mundial.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Plan Plata &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Plan Oro</h2>
        <p>Plan Oro es un plan de Riesgo, se juegan tres numeros de una importarte loteria mundial.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Plan Oro &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿ Que Harías con 10.000.000 U$S ? <span class="text-muted">Suscribase y sea uno de nuestros afortunados ganadores</span></h2>
        <p class="lead">Propuesta Jugada te da la posibilidad de participar de sorteos en las principales loterias del mundo y hacer rentable su dinero con una minima inversión.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/assets/img/money-millon.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Lo importante de estar protegido <span class="text-muted"></span></h2>
        <p class="lead">Prouesta Jugada por tu suscripción ademas de capitalizar dinero piensa en tu tesoro mas preciado tu familia.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/assets/img/family-seguro.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Nadie te da mas <span class="text-muted">Revisa todo nuestros beneficios</span></h2>
        <p class="lead">Suscribite y empezá a disfrutar de lo que tenemos preparado para vos</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/assets/img/gift-sorpresa.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
