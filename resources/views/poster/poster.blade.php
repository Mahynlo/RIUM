@extends('app')

@section('content_poster')

    <h1 style="color:black">Poster</h1>

    <div class="card text-bg-light mb-3" style="max-width: 900px; margin:auto;">
        <div class="card-body" style="text-align: center; color:brown;">
        
            <img class="photo mt-5" alt="photo" src="http://www.ruim.uson.mx/images/ruim2022poster_s.png" style="margin:center; width:100%; border: 3px solid black;"></img>
            <h2 class="card-text mt-3">Para ver el póster en formato PDF para impresión, haga click</h2>
            <p><a class="btn btn-primary btn-lg mt-2" download href="../../../archivos/poster.pdf" role="button"> Descargar en PDF </a></p>
        </div>
    </div><br><br><br>
@endsection