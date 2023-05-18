<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href=" {{ url('img/log.png') }} " type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>XYZ</title>
    <style>
      .banner-image {
        background-image: url('img/fondo.png');
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3" style="background-color: transparent !important;">
        <div class="container">
            <img src="{{ url('img/logo-tienda.png') }}" alt="YNv@XYZ" width="80" height="80">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" {{ url('/') }} ">Inicio</a>
                        </li>
                        <li class="nav-item">
                    <button onclick="window.location.href = '{{ url('/promociones') }}'" type="button" class="btn btn-link link-light">Promociones</button>
                    </li>
                    <li class="nav-item bg-primary">
                        <button onclick="window.location.href = '{{ url('/productos') }}'" type="button" class="btn btn-link link-light">Productos</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href = '{{ url('/compras') }}'" type="button" class="btn btn-link link-light">Compras</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href = '{{ url('/proveedores') }}'" type="button" class="btn btn-link link-light">Proveedores</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href = '{{ url('/mapas') }}'" type="button" class="btn btn-link link-light">Mapa</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href = '{{ url('/login') }}'" type="button" class="btn btn-info" >Acceder</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href = '{{ url('/login') }}'" type="button" class="btn btn-info" >Registrarte</button>
                    </li>

                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar  -->

    <!-- Banner Image  -->
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <div class="alert alert-danger align-items-center" role="alert">
                <div>
                    <span class="material-icons" style="font-size: 150px;
                                                    color: red;">
                                                    warning_amber
                    </span>
                    <h2>Aun estamos en desarrollo. . .</h2>
                    <h5>Esperanos muy pronto.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Image  -->

    <!-- Copyright -->
    <footer class="text-center text-white">
        <div class="text-center p-3"  style="background-color: black">
        <div class="container text-center align-items-center">
            <div class="row text-center al">
                <div class="col-sm-12 col-md-6">
                    <img src="{{ url('img/logo-tienda.png') }}" alt="YNv@XYZ" width="80" height="80">
                </div>
                <div class="col-sm-12 col-md-6">
                    <br>Es hora de comprar &copy; 2023 Todos los derechos reservados.
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>
