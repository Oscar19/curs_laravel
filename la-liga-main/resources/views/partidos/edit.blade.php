@extends('layouts.app')
@section('title', 'Editar batalla')
@section('content')
    
<div class="max-w-xl mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">
   
    <form action="/partidos/{{$partido->partido_id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
        
        <div>
            <label for="equipo_local_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raza Local</label>
            <select id="equipo_local_id" name="equipo_local_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                <option value="" disabled {{ !isset($partido) ? 'selected' : '' }}>Seleccione un equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->equipo_id }}" {{ isset($partido) && $partido->equipo_local_id == $equipo->equipo_id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="equipo_visitante_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raza Visitante</label>
            <select id="equipo_visitante_id" name="equipo_visitante_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="" disabled {{ !isset($partido) ? 'selected' : '' }}>Seleccione un equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->equipo_id }}" {{ isset($partido) && $partido->equipo_visitante_id == $equipo->equipo_id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha y Hora</label>
            <input type="datetime-local" id="fecha" name="fecha" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"  required>
        </div>
        </div>
        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">{{ isset($partido) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>

  
@endsection