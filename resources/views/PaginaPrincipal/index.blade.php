@extends('app')

@section('content_principal')


<section class="py-5 header mt-1">
    <div class="container py-5 text-white">
        <header class="py-5">
            <h1 class="display-4 text-center">Bienvenid@s</h1>
            <h2 class="font-italic mb-1 text-center" >XXV Reunión Universitaria de Investigación en Materiales 
              (RUIM 2022) Del 9 al 11 de Noviembre Auditorio del Centro de las Artes</h2><br>
            <h5 class="font-italic text-center">
              @foreach ($posts as $post)
              @if($post->titulo == "Inicio")
					      {{$post->resumen}}
				      @endif
              @endforeach
            </h5><br>
                <p><a class="btn btn-warning btn-lg text-center" href="/registro" role="button">Registro a RIUM</a></p>
            </p>
        </header>
    </div>
</section>


<!-- Demo content-->
<section class="py-5 section-1">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Demo section 1</h2>
                <p class="text-muted lead"></p>
            </div>
        </div>
    </div>
</section>

<!-- 
<div class="card text-bg-lingt mb-3 mt-5 container-lg" style="max-width: 50rem; margin:auto; color:#fff; background-color: #ffc107;">
  <div class="card-header-p ">
    <h1>Bienvenid@s</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">XXV Reunión Universitaria de Investigación en Materiales (RUIM 2022) Del 9 al 11 de Noviembre
Auditorio del Centro de las Artes</h5>
    <p class="card-text ">El objetivo de la Reunión Universitaria de Investigación en Materiales (RUIM 2022) es dar a 
        conocer a la comunidad universitaria las actividades que se desarrollan en nuestra institución mediante la presentación de trabajos, por parte de estud
        iantes y profesores de la Universidad de Sonora, que tengan como temática la investigación en materiales.</p>
    <p>Por lo anterior, se convoca a los estudiantes de Posgrado y estudiantes avanzados de Licenciatura, así como a los 
        profesores e investigadores de las Divisiones de Ciencias Exactas y Naturales (DCEN), Ciencias Biológicas y de la 
        Salud (DCBS), e Ingeniería (DI) de la Universidad de Sonora, a presentar trabajos en la XXV Reunión Universitaria de 
        Investigación en Materiales (RUIM 2022).</p>
  </div>
  <p><a class="btn btn-primary btn-lg" href="/registro" role="button">Registro a RIUM</a></p>
</div>
</div>


Noticias 
  <h1 class="mt-5" style="color:black; background-color: #e3f2fd;">Noticias.......</h1>


<div class="row row-cols-1 row-cols-md-3 g-4 mt-5" style="margin:10px;">
  <div class="col">
    <div class="card" style="max-width: 500px; color:black; margin: auto; position: relative;">
      <img width="100" height="200" src="http://www.ruim.uson.mx/anterior/files/foto5.jpg" class="card-img-top " alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="/" class="btn btn-primary">Ver noticia</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="max-width: 500px; color:black; margin: auto; position: relative;">
      <img width="100" height="200" src="https://www.elsoldehermosillo.com.mx/local/rm5fyo-unison9/ALTERNATES/LANDSCAPE_1140/Unison9" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="/" class="btn btn-primary">Ver noticia</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="max-width: 500px; color:black; margin: auto; position: relative;">
      <img width="100" height="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKMoEjL-qaM4rvJ4RCyu4cSYNTmRedQweo2lh2HdWnE5NsueocEGZRtyeIqbIXw4a_Ky8&usqp=CAU" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="/" class="btn btn-primary">Ver noticia</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="max-width: 500px; color:black; margin: auto; position: relative;">
      <img width="100" height="200" src="https://www.mexicoescultura.com/galerias/espacios/principal/universidaddesonora3_carrusel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="/" class="btn btn-primary">Ver noticia</a>
      </div>
    </div>
  </div>
</div>
-->

@endsection