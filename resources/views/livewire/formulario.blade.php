<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Inscripciones y Registros
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="my-4 inline-flex justify-center  rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-white shadow-sm hover:bg-red-700">
                Añadir Registro
            </button>
            <form class="flex items-center">   
                <label for="simple-search" class="sr-only">Buscar...</label>
                <div class="relative ">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
            </form>

            <div class="mb-4">
                <label for="exampleFormControlInput2"" class="block text-gray-700 text-sm font-bold mb-2">Filtrar</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 "
                            id="exampleFormControlInput2" wire:model="tipo"
                            placeholder="Tipo de proyecto">
                        <option value="Aceptados">Aceptados</option>
                        <option value="Rechazados">Rechazados</option>
                        <option value="SinCinfirmar">Por confirmar</option>
                    </select>
            </div>
            @if($isOpen)
            @include('livewire.createForm')
            @endif
            <table class="table-fixed  mt-10">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Proyecto</th>
                        <th class="px-4 py-2">Tipo</th>
                        <th class="px-4 py-2">Nombres</th>
                        <th class="px-4 py-2">Apellidos</th>
                        <th class="px-4 py-2">Correo</th>
                        <th class="px-4 py-2">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($formregistros as $formregistro)
                    <tr>
                        <td class="border px-5 py-2 text-center">{{ $formregistro->id }}</td>
                        <td class="border px-4 py-2">{{ $formregistro->proyecto}}</td>
                        <td class="border px-4 py-2">{{ $formregistro->tipo}}</td>
                        <td class="border px-4 py-2">{{ $formregistro->nombres}}</td>
                        <td class="border px-4 py-2">{{ $formregistro->apellidos}}</td>
                        <td class="border px-4 py-2">{{$formregistro->correo}}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $formregistro->id }})"
                                class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer">Editar</button>
                            <button wire:click="delete({{ $formregistro->id }})"
                                class="flex px-4 py-2 bg-red-100 text-gray-900 cursor-pointer">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
