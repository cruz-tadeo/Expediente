@extends('layout')
@section('content')
    <div class="card" style="border-radius: inherit; border-color: #33a6e0 ">
        <div class="card-header" style="text-align: left; border-color: #33a6e0; border-radius: 10px 10px 0px 0px; background-color: #33a6e0; color: White; font-size: 20px;">
            Registrar Paciente
        </div>
        <!--/////////////////////////////////////////////////////////
        <div class="card" style="border-color: White; margin-top: 1em;">
            <div class="card-body" style= "padding-bottom: 0em; border-color: White;">
                <div class="row">
                    <div class="col-lg-4">
                    <label for="pills-tab" style="color: gray; margin-bottom:1em">Tipo de cuenta:</label>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" style="border-radius: 5px 0px 0px 5px" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="border-radius: 0px 5px 5px 0px" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Empresarial</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <!--/////////////////////////////////////////////////////////-->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card" style="border-color: White">
                    <!--<div class="card-header" style="background-color: White; border-color: White ">
                        <p style="color: Grey; font-size: 15px;">La cuenta "personal" esta pensada para profesionales que desean integrarse a la plataforma y trabajar de forma individual.</p>
                    </div>-->
                    <div class="card-body">
                    <!--<form action="{{ url('inicio') }}" method="POST">
                                        {{ csrf_field() }}-->
                        <form>
                            <div class="row">

                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupInput">Nombre(s)</label>
                                        <input name="Nombre" type="text" class="form-control" id="formGroupInput" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput2">Apellido Paterno</label>
                                        <input name="APaterno" type="text" class="form-control" id="formGroupInput2" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput3">Apellido Materno</label>
                                        <input name="AMaterno" type="text" class="form-control" id="formGroupInput3" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput3">Sexo</label>
                                        <input name="sexo" type="text" class="form-control" id="formGroupInput3" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput3">Entidad de nacimiento</label>
                                        <input name="Entidad_federativa" type="text" class="form-control" id="formGroupInput3" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput3">Curp</label>
                                        <input name="Curp" type="text" class="form-control" id="formGroupInput3" placeholder="" pattern="[A-Za-z]+" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="userdate">Fecha de nacimiento</label>
                                        <input name="F_nacimiento" type="date" class="form-control" id="userdate" name="date" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput4">Teléfono</label>
                                        <input name="Telefono" type="tel" class="form-control" id="formGroupInput4" placeholder="" pattern="[0-9]+">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupInput5">Celular(Móvil)</label>
                                        <input name="celular" type="tel" class="form-control" id="formGroupInput5" placeholder="" pattern="[0-9]+">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="FormControlInput1">Correo Electrónico</label>
                                        <input name="Correo" type="email" class="form-control" id="FormControlInput1" placeholder="correo@ejemplo.com" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="FormControlInput1">Medico Que Le Atendera</label>
                                        <input name="Nombre" type="text" class="form-control" id="FormControlInput1" >
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center">
                                <a class="btn btn-secondary" href="#" role="button"  style="margin-top: 1.5em;">Cancelar</a>
                                <button type="submit" class="btn button_hov" style="margin-top: 1.5em; margin-left: 1em">Registrar</button>
                            </div>
                        </form>
                        <!-------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="card-body" style="padding-top: 0em; padding-bottom: 0em;">
            <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="FormControlSelect1">Tipo de cuenta</label>
                        <select class="form-control" id="FormControlSelect1">
                            <option value="0">Cuenta Individual</option>
                            <option value="1">Cuenta Empresarial</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
@endsection
