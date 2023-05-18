<?php

namespace App\Http\Controllers;

use App\Models\personal;
use App\Models\Rol;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personal.create', ['rols' => Rol::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y guardar los datos del formulario en la base de datos
        // ...
        $request-> validate([
            'nombre'=> 'require|max:250',
            'apellido'=> 'require|max:250',
            'email' => 'require|email',
            'fecha_nacimento'=> 'require|date',
            'genero' => 'require',
            'telefono' => 'require',
            'ciudad' => 'require|max:50', 
            'calle' => 'require|max:50',
            'distrito' => 'require|max:50', 
            'numero_casa' => 'require',
            'fecha_inicio'=> 'require|date',
            'fecha_final'=> 'require|date',
            'cargo' => 'require'

        ]);
        $persona =new personal();

        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->email = $request->input('email');
        $persona->nro_telefono = $request->input('telefono');
        $persona->cargo = $request->input('cargo');
        $persona->fecha_contrato = $request->input('fecha_inicial');
        $persona->finalizacion_contrato = $request->input('fecha_final');
        $persona->fecha_nacimiento = $request->input('fecha_nacimiento');
        $persona->genero = $request->input('genero');
        $persona->nro_casa = $request->input('numero_casa');
        $persona->calle = $request->input('calle');
        $persona->ciudad = $request->input('ciudad');
        $persona->distrito = $request->input('distrito');
        $persona->save();

        return redirect()->route('personal.index')->with('success', 'Registro creado exitosamente.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(personal $personal)
    {
        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personal $personal)
    {
        return view('personal.edit', compact('personal'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personal $personal)
    {
         // Validar y actualizar los datos del formulario en la base de datos
        // ...

        return redirect()->route('personal.index')->with('success', 'Registro actualizado exitosamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index')->with('success', 'Registro eliminado exitosamente.');
    
    }

}
