@extends('layouts.app')
@section('title', 'Editar raza')
@section('content')
    
<div class="max-w-xl mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
<h1 class="mb-6 text-center text-2xl lg:text-4xl font-bold">Editar {{$equipo->nombre}}</h1>
<form action="/equipos/{{$equipo->equipo_id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nombre_equipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del equipo</label>
            <input type="text" id="nombre_equipo" value="{{$equipo->nombre}}" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del equipo" required />
        </div>
        <div>
            <label for="imagen_equipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen del equipo</label>
            <input type="file" id="imagen_equipo"  name="imagen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            @if ($equipo->imagen)
                <div class="mt-2">
                    <img src="{{ asset('images/' . $equipo->imagen) }}" alt="{{ $equipo->nombre }}" style="max-width: 100px;">
                </div>
            @endif
        </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
</form>
</div>
@endsection