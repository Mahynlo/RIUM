@extends('app')

@section('content_programa')

    <h1 style="color:black">programa</h1>

    <!-- Demo content-->
<section class="py-5 section-1">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="text-muted lead">AUN ESTAMOS TRABAJANDO EN ESTO, PRÓXIMAMENTE MÁS INFORMACIÓN.</h3>

                @foreach($posts as $post)
                    @if ($post -> id == 5)
                        <h1 class="text-muted lead">{{ $post -> resumen }}</h1>
                        
                    @endif
                 @endforeach
            </div>
        </div>
    </div>
</section>

@endsection