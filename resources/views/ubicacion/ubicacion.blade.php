@extends('app')

@section('content_ubicacion')

    <h1 style="color:black">Ubicacion</h1>

    <div class="card text-bg-light mb-3" style="max-width: 600px; margin:auto;">
        <div class="card-body" style="text-align: center; color:brown;">
            <h4 class="card-title">Centro de las Artes de la Universidad de Sonora</h4>
            <h5 class="card-text">Ubicado en Blvd. Luis Donaldo Colosio y Rosales S/N Colonia Centro</h5>
            <h5 class="card-text">Hermosillo, Sonora</h5>
            <p><a class="btn btn-primary btn-lg mt-1" href="https://goo.gl/maps/yPtsoCmHtSJV4nsL7" target="_blank" rel="noopener noreferrer" role="button">Ver Ubicacion</a></p>
            <iframe class="map-responsive mt-2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1743.4187415223666!2d-110.9596943!3d29.080947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce84491ead1bcf%3A0xfdb274fba98a7049!2sCentro%20de%20las%20Artes%20Unison!5e0!3m2!1ses-419!2smx!4v1666582207070!5m2!1ses-419!2smx"
             width="100%" height="450" style="margin:center; max-width: 500px; border: 3px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div><br><br><br>


@endsection