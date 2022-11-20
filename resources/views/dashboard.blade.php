<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
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
                                <h1>WELCOME</h1>
                                <p class="text-muted lead">Sea usted vienvenido al Administrador</p>
                                
                            </div>
                        </div>
                    </div>

                        <!-- This is an example component -->
    <div class='flex sm:flex-row flex-col space-y-2 sm:space-x-2 flex-row w-full items-center justify-center mt-10'>
	<div class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-blue-300'>
		<div class="flex justify-between w-full">
			<div>
				<div class="p-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
					</svg>
				</div>
			</div>
			<div>
				<div style="padding-top: 0.1em; padding-bottom: 0.1rem"
					class="flex items-center text-xs px-3 bg-blue-200 text-blue-800 rounded-full">100%</div>
			</div>
		</div>
		<div>
			<div class="font-bold text-5xl text-center">
				4
			</div>
			<div class="font-bold text-sm">
				Total de Inscripciones
			</div>
		</div>
	</div>
	<div class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-purple-300'>
		<div class="flex justify-between w-full">
			<div>
				<div class="p-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
					</svg>
				</div>
			</div>
			<div>
				<div style="padding-top: 0.1em; padding-bottom: 0.1rem"
					class="flex items-center text-xs px-3 bg-purple-200 text-purple-800 rounded-full">25%</div>
			</div>
		</div>
		<div >
			<div class="font-bold text-5xl text-center">
				1
			</div>
			<div class="font-bold text-sm">
				Ponencia
			</div>
		</div>
	</div>
	<div
		class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-red-300'>
		<div class="flex justify-between w-full">
			<div>
				<div class="p-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
					</svg>
				</div>
			</div>
			<div>
				<div style="padding-top: 0.1em; padding-bottom: 0.1rem"
					class="flex items-center text-xs px-3 bg-red-200 text-red-800 rounded-full">50%</div>
			</div>
		</div>
		<div>
			<div class="font-bold text-5xl text-center">
				2
			</div>
			<div class="font-bold text-sm">
				Cartel
			</div>
		</div>
	</div>
	<div
		class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-green-300'>
		<div class="flex justify-between w-full">
			<div>
				<div class="p-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
					</svg>
				</div>
			</div>
			<div>
				<div style="padding-top: 0.1em; padding-bottom: 0.1rem"
					class="flex items-center text-xs px-3 bg-green-200 text-green-800 rounded-full">25%</div>
			</div>
		</div>
		<div>
			<div class="font-bold text-5xl text-center">
				1
			</div>
			<div class="font-bold text-sm">
				Asistentes
			</div>
		</div>
	</div>
</div>
                </section>    
            </div>
        </div>
    </div>

</x-app-layout>
