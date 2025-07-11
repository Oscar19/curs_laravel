<?php

namespace App\Http\Controllers;
use App\Models\Partido;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index(){

        $partidos = Partido::all();

        return view('partidos.index', compact('partidos')); 
    }
    public function create(){
        $equipos = Equipo::all();
        return view('partidos.create', ['equipos' => $equipos]);
    }
    public function store(Request $request){

        {
            $validatedData = $request->validate([
                'fecha' => 'required|date',
                'equipo_local_id' => 'required|exists:equipos,equipo_id',
                'equipo_visitante_id' => 'required|exists:equipos,equipo_id',
            ]);
    
            
            $partido = new Partido();
            $partido->fecha = $validatedData['fecha'];
            $partido->equipo_local_id = $validatedData['equipo_local_id'];
            $partido->equipo_visitante_id = $validatedData['equipo_visitante_id'];
            $partido->save();
    
            return redirect('/partidos')->with('success', 'Partido creado exitosamente');
        }
       


    }
    public function show($partido){
        $partido = Partido::find($partido);
        return view('partidos.show', compact('partido'));
       
    }
    public function edit($id){
        $partido = Partido::findOrFail($id);
        $equipos = Equipo::all();
        return view('partidos.edit', compact('partido', 'equipos'));
    }
    public function update(Request $request, $id)
    {
        $partido = Partido::find($id);
        $validatedData = $request->validate([
            'fecha' => 'required|date',
            'equipo_local_id' => 'required|exists:equipos,equipo_id',
            'equipo_visitante_id' => 'required|exists:equipos,equipo_id',
        ]);

        $partido->update([
            'fecha' => $validatedData['fecha'],
            'equipo_local_id' => $validatedData['equipo_local_id'],
            'equipo_visitante_id' => $validatedData['equipo_visitante_id'],
        ]);

        return redirect('/partidos')->with('success', 'Partido actualizado correctamente!');
    }
    public function destroy($partido){
        $partido = partido::find($partido);
        $partido->delete();
        return redirect('/partidos');
    }
}