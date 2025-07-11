@extends('layouts.app')
@section('title', 'Razas')
@section('content')


<a href="/equipos/create" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400" style="position: fixed; top: 10%; left: 10px;">Crear raza</a>

<div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
    @foreach ($equipos as $equipo)
<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    @if($equipo->imagen)
    <a href="/equipos/{{ $equipo->equipo_id }}" class="w-48 h-32 overflow-hidden">
        <img class="p-8 rounded-t-lg w-full h-full object-cover" src="{{ asset('images/' . $equipo->imagen) }}" alt="{{ $equipo->nombre }}" />
    </a>
    @endif
    
</div>


    @endforeach
</div>

@endsection