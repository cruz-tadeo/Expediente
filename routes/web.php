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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/doctor/register', 'DoctorController@register')->name('register');
Route::get('/registro', 'DoctorController@registro')->name('registro');

Route::get('/datos', 'DoctorController@datosDoctor');
Route::resource('/pacientes', 'PacienteController');

Route::get('/registro/paciente', function () {
    return view('pacientes.registro');
});

Route::prefix('/admin')->group(function () {
    Route::post('register', 'AdministradorController@register')->name('admin-register');
    Route::namespace('admin')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin-login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', function () {
            Auth::guard('admin')->logout();
            return redirect('admin/login');
        })->name('admin.logout');
        Route::get('/area', 'LoginController@secret');
    });
    Route::get('/user-manager', 'AdministradorController@manager')->name('user-manager');
    Route::get('/edit-user/{id}', 'AdministradorController@editUser')->name('edit-user');
    Route::post('/update-user/{id}', 'AdministradorController@UpdateUser')->name('update-user');
});
