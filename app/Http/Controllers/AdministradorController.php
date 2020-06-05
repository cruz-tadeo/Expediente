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
        return redirect('/admin/login');
    }

    public function registro()
    {
        return view('admin.auth.register');
    }
}
