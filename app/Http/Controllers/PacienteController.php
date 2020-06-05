<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Doctor;
use App\Clinica;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $doctor = Doctor::where('user_id','=',$id)->first();
        $clinica = Clinica::where('user_id','=',$id)->first();
        return view('pacientes.registro',array(
            'doctor'=>$doctor,
            'clinica'=>$clinica
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->input('nombre');
        $paciente->aPaterno = $request->input('aPaterno');
        $paciente->aMaterno = $request->input('aMaterno');
        $paciente->sexo = $request->input('sexo');
        $paciente->entidad_federativa = $request->input('entidad_federativa');
        $paciente->curp = $request->input('sexo');
        $paciente->f_nacimiento = $request->input('f_nacimiento');
        $paciente->telefono = $request->input('telefono');
        $paciente->celular = $request->input('celular');
        $paciente->correo = $request->input('correo');
        $paciente->doctor_id = Auth::id();
        $paciente->save();
        return redirect('/inicio');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
