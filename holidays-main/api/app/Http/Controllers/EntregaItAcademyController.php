<?php

namespace App\Http\Controllers;

use App\Models\EntregaItAcademy;

use Illuminate\Http\Request;

class EntregaItAcademyController extends Controller
{
    public function index()
    {
      
        $plans = EntregaItAcademy::all();

        return response()->json([
            'message' => 'Llistat de entregues',
            'plans' => $plans
        ], 200);
    }
    public function crear(Request $request)
    {
        $request->validate([
            'nom_entrega' => 'required|string',
            'sprint' => 'required|string|in:HTML i PHP,Bases de dades,Patrons,Laravel MVC,Laravel API',
            'data_entrega' => 'required|date|unique:entrega_it_academies,data_entrega',
            'link_github' => 'required|url',
            'comentaris' => 'nullable|string'
        ]);

        $entrega = EntregaItAcademy::create($request->all());

        return response()->json([
            'message' => 'Entrega creada amb èxit!',
            'entrega' => $entrega
        ], 201);
    }
    public function entregar($id) {
        $entrega = EntregaItAcademy::findOrFail($id);
        return response()->json(['message' => "Entrega realitzada: " . $entrega->nom]);
    }
    
    public function reentregar($id) {
        $entrega = EntregaItAcademy::findOrFail($id);
     
        return response()->json(['message' => "Reentregat: " . $entrega->nom]);
    }
}
