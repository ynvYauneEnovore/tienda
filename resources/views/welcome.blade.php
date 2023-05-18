<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href=" {{ url('img/log.png') }} " type="image/icon type">
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
        <a class="nav-link text-white" href=" {{ url('/') }} ">
            <img src="{{ url('img/logo-tienda.png') }}" alt="YNv@XYZ" width="80" height="80">
    </a>
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
                            <a class="nav-link text-white bg-primary" href=" {{ url('/') }} ">Inicio</a>
                        </li>
                    <li class="nav-item">
                    <button onclick="window.location.href = '{{ url('/promociones') }}'" type="button" class="btn btn-link link-light">Promociones</button>
                    </li>
                    <li class="nav-item">
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
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <a class="nav-link text-white" href=" {{ url('login') }} ">
                        <img src="{{url('img/logo-tienda-2.png')}}" alt="admin-dev" width="230" height="200">
                    </a>
                    <div class="text-with">
                        <a class="nav-link text-white" href=" {{ url('login') }} ">
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">

                <h5 class="text-white">¡Bienvenido al mundo del éxito en el marketing!</h5>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Estrategias de alto rendimiento:
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Nuestro equipo se especializa en desarrollar estrategias de marketing efectivas y personalizadas
                        que te ayudarán a alcanzar tus metas comerciales. Desde la optimización de campañas publicitarias hasta la creación de una
                        sólida presencia en las redes sociales, te proporcionamos las herramientas necesarias para destacar en el mercado.
                        <br>
                        <code>dev: Yovan Yaune</code></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Aliado estratégico dedicado a tu éxito:
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Nos enfocamos en comprender a fondo tu negocio y tu público objetivo. Trabajamos en estrecha
                        colaboración contigo para desarrollar estrategias adaptadas a tus necesidades específicas. Nuestro equipo altamente
                        capacitado y apasionado te brinda un servicio integral y apoyo constante en cada paso del camino, garantizando un
                        impacto duradero y un retorno de inversión sólido.
                        <br>
                        <code>dev: Yovan Yaune</code></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Impulsa tu negocio al siguiente nivel:
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Permítenos ser tu guía en el mundo del marketing y ventas. Con nuestra experiencia
                    y conocimiento, te ayudaremos a llevar tu negocio a nuevas alturas. Ya sea que busques aumentar tus ventas,
                    fortalecer tu marca o expandir tu alcance, estamos aquí para ayudarte a lograrlo. Contáctanos hoy mismo y
                    descubre cómo podemos impulsar tu éxito en el mundo del marketing.
                    <br>
                        <code>dev: Yovan Yaune</code></div>
                    </div>
                </div>
                </div>

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
