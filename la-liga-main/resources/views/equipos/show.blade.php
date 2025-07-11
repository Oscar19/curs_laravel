@extends('layouts.app')
@section('title', 'Partidos')
@section('content')
<div class="flex flex-wrap">
    <div class="w-full sm:w-8/12 mb-10">
      <div class="container mx-auto h-full sm:p-10">
        <nav class="flex px-4 justify-between items-center">
          <div>
            <img src="https://image.flaticon.com/icons/svg/497/497348.svg" alt="" class="w-8">
          </div>
        </nav>
        <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
          <div class="w-full">
            <h1 class="text-4xl lg:text-6xl font-bold">{{$equipo->nombre}}</h1>
            <div class="w-20 h-2 bg-gray-800 my-4"></div>
            <div>
            <a href="/equipos/{{$equipo->equipo_id}}/editar" class="mt-4 mb-4 bg-gray-800 text-white text-2xl font-medium px-4 py-2 rounded shadow">Editar raza</a>
            </div><br>
           <div>
           <a href="/equipos" class="mb-4 mt-4 bg-gray-800 text-white text-2xl font-medium px-4 py-2 rounded shadow">Volver</a>
           </div>
           <div>
           <form action="{{$equipo->equipo_id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="mt-4 bg-gray-800 text-white text-2xl font-medium px-4 py-2 rounded shadow" type="submit">Eliminar equipo</button>
            </form>
           </div>
            
        </div>
        </header>
      </div>
    </div>
    <img src="{{ asset('images/' . $equipo->imagen) }}" alt="{{ $equipo->nombre }}"class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
  </div>
@endsection