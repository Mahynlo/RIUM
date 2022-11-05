@extends('app')

@section('formulario_principal')

  <form class="bt-4 mt-5" style="color: black; padding:5rem; border: 3px solid black; position: relative; margin:auto; max-width:500px ;" >
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


  