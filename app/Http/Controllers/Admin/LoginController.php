<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function __construct()
    {
        $this->middleware('auth:admin', ['only'=>['secret']]);
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    protected function authenticated()
    {
        return redirect('admin/area');
    }

    public function secret()
    {
        return view('layout');
    }


    public function username()
    {
        return 'username';
    }
}
