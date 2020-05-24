@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="row shadow" style="width: 45rem; border-radius: 10px 10px 10px 10px">
                <div class="col-lg-6" style="padding: 0em;  border-radius: 10px 0px 0px 10px">
                    <div class="card" style="border-radius: inherit; border-color: White ">
                        <div class="card-header"
                             style="border-color:White; border-radius: 10px; background-color: White; color: Gray; font-weight: bold">
                            LOGO
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/login')}}" method="POST">
                                @csrf
                                <div style="color: Gray; font-weight: bold;">
                                    INICIAR SESIÓN ADMINISTRADOR
                                </div>
                                <P style="color: Gray;">Ingrese sus datos de acceso para continuar</P>

                                <div class="input-group mb-3" style="margin-top: 1.5rem">
                                    <div class="input-group-append">
                                        <span class="input-group-text"
                                              style="color: Gray; background-color: White; border-color: LightGray White LightGray LightGray; border-radius: 5px 0px 0px 5px "><i
                                                class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" value=""
                                           placeholder="Usuario"
                                           required>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"
                                              style="color: Gray; background-color: White; border-color: LightGray White LightGray LightGray; border-radius: 5px 0px 0px 5px "><i
                                                class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" value=""
                                           placeholder="Contraseña" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-outline-primary"
                                            style="margin-top: 0.5em; margin-bottom: 2em; width:100%">Iniciar Sesión
                                    </button>
                                </div>
                                <div class="link-content row justify-content-center" style="margin-top: 0.5em">
                                    <a href="{{url('/registro')}}" class="btn btn-link">Pre-registro</a>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="padding: 1em;
                                             border-radius: 0px 10px 10px 0px;
                                             background-color: #33a6e0;
                                             display: flex;
                                             align-items: center;">
                    <div>
                        <img style="width: 100%" src="" class="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
