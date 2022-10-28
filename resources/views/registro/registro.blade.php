@extends('app')

@section('content_registro')

<h1 style="color:black; padding: 10px;">Registro</h1>


<section class="py-5 section-1">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 style="color:blue">GRACIAS POR SU INTERÉS EN PARTICIPAR.</h1><br>

                <div class="text-muted lead">
                  <h3>Fechas para el envío de trabajos: Por confirmar.</h3><br>
                  <a class="text-black">Formas de participación:</a>
                  <ul class="text-justificate">
                    <li>Pláticas invitadas.</li>
                    <li>Posters</li>
                  </ul> 

                  <a>El registro para participaciones, tanto en formato de plática como de póster, se deberá enviar por el</a>
                  <a class="text-black" href="#">formulario de registro.</a><br><br>

                  <a class="text-black">Formato de resumen:</a><br>
                  <a>La extensión es de una o dos cuartillas siguiendo la plantilla de formato WORD 2010 y 
                    posteriores (.docx), la cual está disponible en el siguiente enlace.</a>
                  <a class="text-black" href="#">CLICK AQUÍ</a><br><br>

                  <a class="text-black">Constancias de participación:</a>
                  <a>Se expedirán constancias de participación a los siguientes participantes:</a>
                  <ul class="text-justificate">
                    <li>Pláticas invitadas.</li>
                    <li>Posters</li>
                  </ul><br>

                  <a class="text-black">Participación en los cursos talleres:</a><br>
                  <a>Para la participación en los cursos y talleres que se llevarán a cabo en esta edición de la RUIM, 
                    es necesario un pre- registro, para el cual se habilitará un enlace próximamente. </a><br><br>
                </div>
              
            </div>
        </div>
    </div>
</section>

  <form class="bt-4 " style="color: black; padding:5rem; border: 3px solid black; position: relative; margin:auto; max-width:500px ;" >
    <div class="mb-2">
      <h1 style="color:black; margin:center;">Inico de Secion</h1>
        <label for="exampleInputEmail1" class="form-label">Coreo Electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection