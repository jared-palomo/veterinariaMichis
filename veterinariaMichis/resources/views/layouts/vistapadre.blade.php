<!doctype html>
<html lang="es-MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    @yield('css')

    <title>Veterinaria Los Michis</title>

    <style>
      body{
        background-image: url('/img/bgpet.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top justify-content-end">
            <a class="navbar-brand" href="{{ url('/') }}"><img src='/img/Cat.png' alt="foto_michis"  width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/citas') }}">Citas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/veterinarios') }}">Veterinarios</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pacientes') }}" tabindex="-1" aria-disabled="true">Pacientes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/mascotas') }}" tabindex="-1" aria-disabled="true">Mascotas</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
          </nav>

          @yield('contenidoprincipal')
    
    </div>

    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>