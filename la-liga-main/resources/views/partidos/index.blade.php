@extends('layouts.app')
@section('title', 'Batallas')
@section('content')
<a href="/partidos/create" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400" style="position: fixed; top: 10%; left: 10px;">Crear Batalla</a>
<div class="max-w-xl mx-auto mt-16 flex w-full flex-col border rounded-lg bg-white p-8">

<div class="flow-root">
<ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
  
    @foreach ($partidos as $partido )

            <li class="py-3 sm:py-4">
            <a href="/partidos/{{$partido->partido_id}}">
                <div style="font-size: 1em;" class="text-center mb-6">
                    {{$partido->fecha}}
                </div>
               
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('images/' . $partido->equipoLocal->imagen) }}" alt="{{ $partido->equipoLocal->nombre }} ">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-m font-medium text-gray-900 truncate dark:text-white">
                        {{ $partido->equipoLocal->nombre }}
                        </p>

                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('images/' . $partido->equipoVisitante->imagen) }}" alt="{{ $partido->equipoVisitante->nombre }} ">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-m font-medium text-gray-900 truncate dark:text-white">
                        {{ $partido->equipoVisitante->nombre }}
                        </p>

                    </div>
                    </div>
                </div>
                </div>
            </a>
            </li>
           
            
            
      
  

    @endforeach
</ul>
</div>
</div>

@endsection