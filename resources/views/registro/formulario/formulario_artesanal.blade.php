@extends('app')
@section('formulario_principal')


  <H1 style = "color:black">FORMULARIO PARA REGISTRO </H1>

  <br>

  <form class="bt-4 mt-5" style="color: black; padding:5rem; border: 3px solid black; 
  position: relative; margin:auto; max-width:1200px ;" action = "{{route('informacionEnviada.store')}}
  " method = "post">

  @csrf

    <div class="mb-2">
      <div class="form-group">
        <h3 style = "color: black">Información del proyecto</h3>
        <label for="exampleFormControlSelect1" style = "color:black" >PROYECTO A PRESENTAR</label>
        <select class="form-control" id="exampleFormControlSelect1" name="tipoProyecto" id="tipoProyecto">
          <option>(Seleccionar)</option>
          <option>Ponencia</option>
          <option>Poster</option>
        </select>

        <br>

        <label for="exampleFormControlSelect1" style = "color:black">NOMBRE DEL PROYECTO</label>
        <input name="nombreProyecto" type="text" class="form-control" id="nombreProyecto" placeholder="NOMBRE">

        <br>

        <label for="exampleFormControlSelect1" style = "color:black" >ADJUNTAR RESUMEN</label> <br>
        <input type="file" name = "adjunto" accept = ".pdf, .docx" enctype="multipart/form-data" style = "color:black" >

      </div>

      <br>
      <div class="form-group">
        <h3 style = "color: black">Información del equipo</h3>
        <?php

        // La lista de nombres; por defecto vacía
        $nombres = [];
        $apellidos = [];
        $correos = [];
        $nombre;
        $apellido;
        $correo;
        // Si hay nombres enviados por el formulario; entonces
        // la lista es el formulario.
        // Cada que lo envíen, se agrega un elemento a la lista
        if (isset($_POST["nombres"])) {
            $nombres = $_POST["nombres"];
        }

        if (isset($_POST["apellidos"])) {
            $apellidos = $_POST["apellidos"];
        }

        if (isset($_POST["correos"])) {
            $correos = $_POST["correos"];
        }
        ?>

        <form method="post" action="/formulario/formulario_artesanal.blade.php">
            <!--Comienza el ciclo que dibuja los campos dinámicos-->
            <?php foreach ($nombres as $nombre) { ?>
                <label style="color:black">INTEGRANTE:</label>
                <input value="<?php $nombre ?>" type="text" name="nombres[]" id="nombres">
            <?php } ?>

            <?php foreach ($apellidos as $apellido) { ?>
                <input value="<?php $apellido ?>" type="text" name="apellidos[]" id = "apellidos">
            <?php } ?>

            <?php foreach ($correos as $correo) { ?>
                <input value="<?php $correo ?>" type="email" class="form-control name="correos[]" id="correos">
                <br><br>
            <?php } ?>
            <!--Termina el ciclo que dibuja los campos dinámicos-->

            <!--Fuera de la lista tenemos siempre este campo, es el primero-->
            <label style="color:black">INTEGRANTE: </label>
            <input value="<?php $nombre ?>" type="text" name="nombres[]" placeholder="Nombre(s)">
            <input value="<?php $apellido ?>" type="text" name="apellidos[]" placeholder="Apellidos">
            <input value="<?php $correo ?>" type="text" name="correos[]" placeholder="Email">

            <button name="agregar" type="submit" class="btn btn-primary">AGREGAR INTEGRANTE</button>
            <br><br>
        </form>
      </div>

      <button name="guardar" type="submit" class="btn btn-primary">ENVIAR REGISTRO</button>
    </div>
  </form>

@endsection