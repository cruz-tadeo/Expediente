<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::namespace('Auth')->group(function (){
    Route::get('/inicio', function (){
        $id = Auth::id();
        $doctor = \App\Doctor::where('user_id','=',$id)->first();
        $clinica = \App\Clinica::where('user_id','=',$id)->first();
        return view('layout',array(
            'doctor'=>$doctor,
            'clinica'=>$clinica
        ));
    });
});

Auth::routes();

//ADMINISTRADORES
Route::prefix('/admin')->group(function(){
    Route::namespace('admin')->group(function () {
        Route::get('/login','LoginController@showLoginForm')->name('admin-login');
        Route::post('/login','LoginController@login');
        Route::get('/area', 'LoginController@secret');
    });
});

//Doctores
Route::get('/registro', 'DoctorController@registro')->name('registro');
Route::post('register', 'DoctorController@register')->name('register');


//Pacientes
Route::resource('/paciente','PacienteController');
