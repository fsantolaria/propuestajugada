<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>PropuestaJugada.com</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
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
    <link href="/assets/css/pricing.css" rel="stylesheet">
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

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Planes</h1>
  <p class="lead">Para terminar la suscripcion debe adherirse a uno de nuestros  tres planes para poder disfrutar de exceltes y exclusivos beneficios</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Plan Bronce</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$ 9,90<small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>1 número de loteria</li>
          <li>Seguro Familiar</li>
          <li></li>
          <li>Asesoramiento Financiero</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Suscribirse</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Plan Plata</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$ 18,90 <small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>2 numeros de Loteria</li>
          <li>Seguro Familiar</li>
          <li></li>
          <li>Asesoramiento Financiero</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Suscribirse</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Plan Oro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$ 28,90 <small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>3 numeros de loteria</li>
          <li>Seguro Familiar</li>
          <li>Club VIP</li>
          <li>Asesoramiento Financiero</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Suscribirse</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/bootstrap/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
      </div>

    </div>
  </footer>
</div>
</body>
</html>
