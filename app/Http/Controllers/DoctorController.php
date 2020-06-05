<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Clinica;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    public function register(Request $request)
    {
            $user = new User();
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->assignRole('invitado');
            $user->save();
            if(!is_null($request->input('razon_social') && !is_null($request->input('rfc')))){
                $clinica = new Clinica();
                $clinica->user_id = $user->id;
                $clinica->razon_social = $request->input('razon_social');
                $clinica->rfc = $request->input('rfc');
                $clinica->estado = $request->input('estado');
                $clinica->municipio = $request->input('municipio');
                $clinica->localidad = $request->input('localidad');
                $clinica->colonia = $request->input('colonia');
                $clinica->calle = $request->input('calle');
                $clinica->no_ex = $request->input('no_ex');
                $clinica->no_in = $request->input('no_in');
                $clinica->codigo_postal = $request->input('codigo_postal');
                $clinica->telefono = $request->input('telefono');
                $clinica->save();
            }else{
                $doctor = new Doctor();
                $doctor->user_id = $user->id;
                $doctor->prefijo = $request->input('prefijo');
                $doctor->nombre = $request->input('nombre');
                $doctor->apellido_pa = $request->input('apellido_pa');
                $doctor->apellido_ma = $request->input('apellido_ma');
                $doctor->telefono = $request->input('telefono');
                $doctor->celular = $request->input('celular');
                $doctor->estado = $request->input('estado');
                $doctor->especialidad = $request->input('especialidad');
                $doctor->save();
            }
            return redirect('/login');
    }

    public function registro()
    {
        return view('register');
    }

}
