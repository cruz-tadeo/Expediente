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

            return redirect('/login');
    }

    public function registro()
    {
        return view('admin.auth.register');
    }

}
