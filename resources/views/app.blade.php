<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            color: whitesmoke;
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        p{
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        .text-small {
          font-size: 0.9rem !important;
        }

        .header {
          background-color: #00d2ff;
          background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 100%);
        }
        .section-1 {
          background: #f5f5f5;
        }

    </style>

<style>
.menu {
  list-style-type: none;
  margin: 0;
  padding: 16px;
  overflow: hidden;
  background-color: orange;
}

.linkMenu {
  float: left;
}

.linkMenu a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 16px;
  line-height: 26px;
  text-decoration: none;

  transition: all 0.2s ease-in-out;
}

.linkMenu a:hover {
  background-color: #004990;
}
</style>
    
    <title>RIUM 2023</title>
</head>
<body>

<!-- Imagen del evento -->
<div id="carouselExampleSlidesOnly" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="border: 3px solid black;" src="http://www.ruim.uson.mx/images/banner.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- Barra de navegacion -->
<nav class="menu navbar navbar-expand-lg  p-2 mt-1 sticky-top">
  <div class="container-fluid" >
    <a  class="navbar-brand link-light" href="/">RIUM</a>
    <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-1" id="navbarNav">
      <ul class="navbar-nav">
        <li class="linkMenu nav-item">
          <a class="nav-link active link-light" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="/programa">Programa</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="/poster">Posters</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="/registro">Registro</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="/ubicacion">Ubicacion</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="/contacto">Contacto</a>
        </li>
        <li class="linkMenu nav-item">
          <a class="nav-link link-light" href="#edicion">Ediciones anteriores</a>
        </li>
        
      </ul>
      
    </div>
    <p><a class="btn btn-primary btn-lg text-center" href="{{ route('login') }}" role="button">Inicio de sesión</a></p>
  <p><a class="btn btn-primary btn-lg text-center" href="{{ route('register') }}" role="button">Registrar Admin</a></p>
  </div>
</nav>

        @yield('content_principal')

        @yield('content_registro')

        @yield('content_poster')

        @yield('content_programa')

        @yield('content_contacto')

        @yield('content_ubicacion')

        @yield('formulario_principal')        

        <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class=" mt-4">

    <footer class="bg-light text-center text-white">
    <!-- Copyright -->
      <div class="text-center p-3" style="background-color: orange;">
        © 2023 
        <a class="text-white" href="#">Comité Organizador RUIM </a><br>
        <a class="text-white" href="https://www.unison.mx">Universidad de Sonora | </a>
        <a class="text-white" href="https://dcen.unison.mx">División de Ciencias Exactas y Naturales | </a>
        <a class="text-white" href="https://difus.unison.mx">Departamento de Investigación en Física</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
<!-- End of .container -->
</body>
</html>