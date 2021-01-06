<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//utilizar el modelo
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente.index')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();
        $pacientes->nombre = $request->get('nombre');
        $pacientes->a_paterno = $request->get('paterno');
        $pacientes->a_materno = $request->get('materno');
        $pacientes->telefono = $request->get('telefono');
        $pacientes->correo = $request->get('email');

        $calle = $request->get('calle');
        $colonia = $request->get('colonia');

        $pacientes->Direccion = $calle.' '.$colonia;

        $pacientes->save();

        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        
        return view('paciente.edit')->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        
        $paciente->nombre = $request->get('nombre');
        $paciente->a_paterno = $request->get('paterno');
        $paciente->a_materno = $request->get('materno');
        $paciente->telefono = $request->get('telefono');
        $paciente->correo = $request->get('email');

        $calle = $request->get('calle');
        $colonia = $request->get('colonia');

        $paciente->Direccion = $calle.' '.$colonia;

        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        return redirect('/pacientes');
    }
}
