<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursitos</title>


    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body >
    <style>
        body{
            background-image: url('https://img.freepik.com/foto-gratis/smooth-azul-oscuro-vineta-negra-studio-uso-bien-como-fondo-informe-negocios-digital-plantilla-sitio-web_1258-748.jpg?size=626&ext=jpg');
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #00FFFF">
        <a class="navbar-brand" href="/"><h1 style="color:#0099CC ; font-weight: bold">Cursitos</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px; margin: 1em" 
              href="<?php echo route('boletaInscripcion.index')?>">Cursos <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link"  style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px; margin: 1em" 
              href="<?php echo route('alumno.show')?>">Mis Cursos alumno <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px;margin: 1em"
              href="<?php echo route('profesor.show')?>">Mis Cursos Profesor <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px;margin: 1em"
              href="<?php echo route('Bitacora.show')?>">Bitacora <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle font-weight-bold" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px;margin: 1em" 
              href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registrate
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo route('alumno.create')?>">Alumno</a>
                <a class="dropdown-item" href="<?php echo route('profesor.create')?>">Profesor</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
        
            
          </ul>
          
          
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            @guest
              <li class="nav-item">
                <a class="nav-link" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px;margin: 1em" 
                href="{{ route('login') }}">{{ __('Inicia Sesión') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" style="color: #0099CC;background: transparent;border: 2px solid #0099CC;border-radius: 6px;margin: 1em"
                    href="{{ route('register') }}">{{ __('Registrate') }}</a>
                </li>
              @endif

            @else
                
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                  </a>
  
                  <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown"
                    style="border-radius: 12px">
                    <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault(); 
                      document.getElementById('logout-form').submit();"> Salir </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </div>
                </li>
            @endguest
              
            </ul>
          
        </div>
      </nav>

    @yield('contenido')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
        crossorigin="anonymous">
    </script>
</body>
</html>