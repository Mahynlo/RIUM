<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Pagina') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                               <!-- Demo content-->
                <section class="py-5 section-1">
                    <div class="container py-5 text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                            <h1>Modificar</h1>
                            <form method="post" action="{{url('/navegacion/editor')}}"> 
                                <div id="toolbar-container"></div>
                                <p><textarea class="form-control from-center" id="editor" name="editor" rows="10" cols="50"></textarea></p>
                                    {{csrf_field()}}
                                <input type="submit" name="submit" value="Guardar"/>
                            </div>
                            
                        </div>
                    </div>
                </section>    
            </div>
        </div>
    </div>


    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then(editor=>{
            const toolbarContainer = document.querySelector('#toolbar-container');
            toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        })
        .catch( error => {
            console.error( error );
        } );
    </script>

</x-app-layout>