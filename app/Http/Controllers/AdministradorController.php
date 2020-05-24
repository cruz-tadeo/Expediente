<?php

namespace App\Http\Controllers;

use App\Clinica;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function register(Request $request)
    {
        $admin = new Admin();
        $admin->username = $request->input('username');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->assignRole('invitado');
        $admin->save();
        $clinica = new Clinica();
        $clinica->admin_id = $admin->id;
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
        return redirect('/admin/login');
    }

    public function registro()
    {
        return view('admin.auth.register');
    }
}
