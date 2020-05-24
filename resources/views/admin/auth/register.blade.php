@extends('layouts.app')

@section('content')
    <div class="col-lg-12" style="padding: 0em;  border-radius: 10px 10px 0px 0px">
        <div class="card" style="border-radius: inherit; border-color: #33a6e0 ">
            <div class="card-header"
                 style="text-align: left; border-color: #33a6e0; border-radius: 10px 10px 0px 0px; background-color: #33a6e0; color: White; font-size: 20px;">
                Pre-Registro
            </div>
            <!--/////////////////////////////////////////////////////////-->
            <div class="card" style="border-color: White; margin-top: 1em;">
                <div class="card-body" style="padding-bottom: 0em; border-color: White;">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="pills-tab" style="color: gray; margin-bottom:1em">Tipo de cuenta:</label>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" style="border-radius: 5px 0px 0px 5px"
                                       id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                       aria-controls="pills-home" aria-selected="true">Doctor</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link"><i class="fas fa-info-circle"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="border-radius: 0px 5px 5px 0px" id="pills-profile-tab"
                                       data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                       aria-selected="false">Clinica</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/////////////////////////////////////////////////////////-->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card" style="border-color: White">
                        <!--<div class="card-header" style="background-color: White; border-color: White ">
                            <p style="color: Grey; font-size: 15px;">La cuenta "personal" esta pensada para profesionales que desean integrarse a la plataforma y trabajar de forma individual.</p>
                        </div>-->
                        <div class="card-body">
                            <form id=formulariousuario method="POST" action="{{ url('/doctor/register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-auto col-md-12">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput">Nombre(s)</label>-->
                                            <select class="form-control" id="formGroupInput" name="prefijo">
                                                <option value="Dr">Dr</option>
                                                <option value="Dra">Dra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <br>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput">Nombre(s)</label>-->
                                            <input type="text" class="form-control" id="formGroupInput"
                                                   placeholder="Nombre(s)" required pattern="[A-Za-z]+" required
                                                   name="nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput2">Apellido Paterno</label>-->
                                            <input type="text" class="form-control" id="formGroupInput2"
                                                   placeholder="Apellido Paterno" required name="apellido_pa">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput3">Apellido Materno</label>-->
                                            <input type="text" class="form-control" id="formGroupInput3"
                                                   placeholder="Apellido Materno" name="apellido_ma">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style="border-radius: 5px 0px 0px 5px"><i
                                                        class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="tel" name="telefono" class="form-control" value=""
                                                   placeholder="Teléfono Fijo" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="tel" class="form-control" id="formGroupInput4" placeholder="Teléfono fijo" pattern="[0-9]+">
                                        </div>  -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style="border-radius: 5px 0px 0px 5px"><i
                                                        class="fas fa-mobile-alt"></i></span>
                                            </div>
                                            <input type="tel" name="celular" class="form-control" value=""
                                                   placeholder="Teléfono Celular" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="tel" class="form-control" id="formGroupInput5" placeholder="Teléfono celular" pattern="[0-9]+">
                                        </div>-->
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style="border-radius: 5px 0px 0px 5px"><i
                                                        class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control" value=""
                                                   placeholder="Correo Electrónico" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="FormControlInput1">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="FormControlInput1" placeholder="Correo electrónico" required>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="FormControlSelect3">Entidad Federativa</label>-->
                                            <select class="form-control" id="FormControlSelect3" name="estado">
                                                <option value="0">Estado de nacimiento...</option>
                                                <option value="1">Aguascalientes</option>
                                                <option value="2">Baja California</option>
                                                <option value="3">Baja California Sur</option>
                                                <option value="4">Campeche</option>
                                                <option value="5">Chiapas</option>
                                                <option value="6">Chihuahua</option>
                                                <option value="7">Ciudad de México</option>
                                                <option value="8">Coahuila</option>
                                                <option value="9">Colima</option>
                                                <option value="10">Durango</option>
                                                <option value="11">Estado de México</option>
                                                <option value="12">Guanajuato</option>
                                                <option value="13">Guerrero</option>
                                                <option value="14">Hidalgo</option>
                                                <option value="15">Jalisco</option>
                                                <option value="16">Michoacán</option>
                                                <option value="17">Morelos</option>
                                                <option value="18">Nayarit</option>
                                                <option value="19">Nuevo León</option>
                                                <option value="20">Oaxaca</option>
                                                <option value="21">Puebla</option>
                                                <option value="22">Querétaro</option>
                                                <option value="23">Quintana Roo</option>
                                                <option value="24">San Luis Potosí</option>
                                                <option value="25">Sinaloa</option>
                                                <option value="26">Sonora</option>
                                                <option value="27">Tabasco</option>
                                                <option value="28">Tamaulipas</option>
                                                <option value="29">Tlaxcala</option>
                                                <option value="30">Veracruz</option>
                                                <option value="31">Yucatán</option>
                                                <option value="32">Zacatecas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6">
                                        <div class="form-group">
                                            <!--label for="FormControlSelect2">Especialidad</label>-->
                                            <select class="form-control" id="FormControlSelect2" name="especialidad">
                                                <option value="0" selected="selected">Seleccione su especialidad...
                                                </option>
                                                <option value="1">ACUPUNTURA</option>
                                                <option value="2">ADMINISTRACION HOSPITALARIA</option>
                                                <option value="3">ALERGIA E INMUNOLOGIA</option>
                                                <option value="4">ALGOLOGIA</option>
                                                <option value="5">ANATOMIA PATOLOGICA</option>
                                                <option value="6">ANESTESIOLOGIA</option>
                                                <option value="7">ANGIOLOGIA</option>
                                                <option value="8">ASMA BRONQUIAL</option>
                                                <option value="9">ATENCION DEL HOMBRE</option>
                                                <option value="10">AUDIOLOGIA</option>
                                                <option value="11">BACTERIOLOGIA</option>
                                                <option value="12">BARIATRIA</option>
                                                <option value="13">CARDIOLOGIA</option>
                                                <option value="14">CARDIOLOGIA PEDIATRICA</option>
                                                <option value="15">CIRUGIA CARDIOVASCULAR</option>
                                                <option value="16">CIRUGIA DE CUELLO</option>
                                                <option value="17">CIRUGIA DE TRASPLANTES</option>
                                                <option value="18">CIRUGIA ENDOSCOPICA</option>
                                                <option value="19">CIRUGIA GASTROINTESTINAL</option>
                                                <option value="20">CIRUGIA GENERAL</option>
                                                <option value="21">CIRUGIA GENERAL Y ENDOSCOP</option>
                                                <option value="22">CIRUGIA MAXILOFACIAL</option>
                                                <option value="23">CIRUGIA OFTALMOLOGICA</option>
                                                <option value="24">CIRUGIA ONCOLOGICA</option>
                                                <option value="25">CIRUGIA ORAL</option>
                                                <option value="26">CIRUGIA ORAL Y MAXILOFACIAL</option>
                                                <option value="27">CIRUGIA ORTOPEDICA</option>
                                                <option value="28">CIRUGIA PEDIATRICA</option>
                                                <option value="29">CIRUGIA PLASTICA</option>
                                                <option value="30">CIRUGIA UROLOGICA</option>
                                                <option value="31">CIRUGIA VASCULAR</option>
                                                <option value="32">CIRUJANO DENTISTA</option>
                                                <option value="33">CIRUJANO OTORRINOLARINGOLOGO</option>
                                                <option value="34">COLOPROCTOLOGIA</option>
                                                <option value="35">COLPOSCOPIA</option>
                                                <option value="36">CONTROL DE PESO</option>
                                                <option value="37">DERMATOLOGIA</option>
                                                <option value="38">DERMATOLOGIA PEDIATRICA</option>
                                                <option value="39">ENDOCRINOLOGIA</option>
                                                <option value="40">ENDOCRINOLOGIA PEDIATRICA</option>
                                                <option value="41">ENDOSCOPIA GASTROINTESTINAL</option>
                                                <option value="42">ENDOSCOPIA PEDIATRICA</option>
                                                <option value="43">FISIOTERAPIA</option>
                                                <option value="44">FONIATRIA</option>
                                                <option value="45">GASTROENTEROLOGIA</option>
                                                <option value="46">GASTROENTEROLOGIA PEDIATRICA</option>
                                                <option value="47">GENETICA</option>
                                                <option value="48">GERIATRIA</option>
                                                <option value="49">GERONTOLOGIA</option>
                                                <option value="50">GINECOLOGIA Y OBSTETRICIA</option>
                                                <option value="51">HEMATOLOGIA</option>
                                                <option value="52">HOMEOPATIA</option>
                                                <option value="53">HOMEOPATIA DENTAL</option>
                                                <option value="54">HOMOTOXICOLOGIA</option>
                                                <option value="55">IMPLANTOLOGIA DENTAL</option>
                                                <option value="56">INFECTOLOGIA</option>
                                                <option value="57">INFECTOLOGIA PEDIATRICA</option>
                                                <option value="58">INHALOTERAPI</option>
                                                <option value="59">INMUNOLOGIA</option>
                                                <option value="60">MEDICINA ALTERNATIVA</option>
                                                <option value="61">MEDICINA ANTIENVEJECIMIENTO</option>
                                                <option value="62">MEDICINA BIOENERGETICA</option>
                                                <option value="63">MEDICINA CRITICA Y TERAPIA INTENSIVA</option>
                                                <option value="64">MEDICINA DE REHABILITACION</option>
                                                <option value="65">MEDICINA DEL ADOLESCENTE</option>
                                                <option value="66">MEDICINA DEL DEPORTE</option>
                                                <option value="67">MEDICINA DEL TRABAJO</option>
                                                <option value="68">MEDICINA ESTETICA</option>
                                                <option value="69">MEDICINA FAMILIAR</option>
                                                <option value="70">MEDICINA FISICA Y REHABILITACION</option>
                                                <option value="71">MEDICINA GENERAL</option>
                                                <option value="72">MEDICINA HIPERBARICA</option>
                                                <option value="73">MEDICINA INTERNA</option>
                                                <option value="74">MEDICINA LEGAL</option>
                                                <option value="75">MEDICINA NATURISTA</option>
                                                <option value="76">MEDICINA NUCLEAR</option>
                                                <option value="77">MEDICINA SUPLEMENTARIA E INMUNOTERAPIA</option>
                                                <option value="78">MEDICINA Y PATOLOGIA BUCAL</option>
                                                <option value="79">NEFROLOGIA</option>
                                                <option value="80">NEUMOLOGIA</option>
                                                <option value="81">NEUMOLOGIA PEDIATRICA</option>
                                                <option value="82">NEUMOLOGIA Y BRONCOSCOPIA</option>
                                                <option value="83">NEUMOLOGIA Y CIRUGIA DE TORAX</option>
                                                <option value="84">NEUROCIRUGIA</option>
                                                <option value="85">NEUROCIRUGIA PEDIATRICA</option>
                                                <option value="86">NEUROFISIOLOGIA</option>
                                                <option value="87">NEUROLOGIA</option>
                                                <option value="88">NEUROLOGIA PEDIATRICA</option>
                                                <option value="89">NEUROPSICOLOGIA</option>
                                                <option value="90">NEURORADIOLOGIA</option>
                                                <option value="91">NUTRICION</option>
                                                <option value="92">OFTALMOLOGIA</option>
                                                <option value="93">ONCOLOGIA</option>
                                                <option value="94">ONCOLOGIA QUIRURGICA</option>
                                                <option value="95">OPTOMETRISTA</option>
                                                <option value="96">ORTODONCIA</option>
                                                <option value="97">ORTOPEDIA</option>
                                                <option value="98">ORTOPEDIA DEL DEPORTE</option>
                                                <option value="99">ORTOPEDIA MAXILAR</option>
                                                <option value="100">ORTOPEDIA PEDIATRICA</option>
                                                <option value="101">ORTOPEDIA Y TRAUMATOLOGIA</option>
                                                <option value="102">OTORRINOLARINGOLOGIA</option>
                                                <option value="103">PARODONCIA</option>
                                                <option value="104">PATOLOGIA</option>
                                                <option value="105">PEDIATRA ALERGOLOGO</option>
                                                <option value="106">PEDIATRIA</option>
                                                <option value="107">PEDIATRIA Y NEONATOLOGIA</option>
                                                <option value="108">PERIODONCIA</option>
                                                <option value="109">PODOLOGIA</option>
                                                <option value="110">PROCTOLOGIA</option>
                                                <option value="111">PROSTODONCIA</option>
                                                <option value="112">PROTESIS BUCAL</option>
                                                <option value="113">PROTESIS MAXILOFACIAL</option>
                                                <option value="114">PROTESIS Y REHABILITACION BUCAL</option>
                                                <option value="115">PSICOAN</option>
                                                <option value="116">PSICOLOGIA</option>
                                                <option value="117">PSICOLOGIA FORENSE</option>
                                                <option value="118">PSICOTERAPIA</option>
                                                <option value="119">PSICOTERAPIA ERICKSONIANA</option>
                                                <option value="120">PSIQUIATRIA</option>
                                                <option value="121">QUIROPRACTICO</option>
                                                <option value="122">RADIODIAGNOSTICO</option>
                                                <option value="123">RADIOLOGIA</option>
                                                <option value="124">REAHABILITACION NEURO - MUSCULOESQUELETICA</option>
                                                <option value="125">REGENERACION TISULAR</option>
                                                <option value="126">REHABILITACION BUCAL</option>
                                                <option value="127">REHABILITACION E IMPLANTOLOGIA BUCAL</option>
                                                <option value="128">REHABILITACION NEUROPSICOLOGICA</option>
                                                <option value="129">REUMATOLOGIA</option>
                                                <option value="130">SEXOLOGIA</option>
                                                <option value="131">TANATOLOGIA</option>
                                                <option value="132">TERAPEUTA</option>
                                                <option value="133">TERAPIA EN COMUNICACION HUMANA</option>
                                                <option value="134">TERAPIA FISICA Y REHABILITACION</option>
                                                <option value="135">TRATAMIENTO DEL VIH</option>
                                                <option value="136">TRATAMIENTO Y TRANSPLANTE CAPILAR</option>
                                                <option value="137">ULTRASONIDO DIAGNOSTICO</option>
                                                <option value="138">ULTRASONIDO DIAGNOSTICO Y DENSITOMETRIA</option>
                                                <option value="139">URGENCIAS MEDICO QUIRURGICA</option>
                                                <option value="140">UROLOGIA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--<div style="text-align: center; margin-top: 1.5rem; margin-bottom: 2.4rem; color: #90EE90; " >
                                    <h1 style="font-weight: lighter; font-size: 2.0rem">Datos de acceso</h1>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style="border-radius: 5px 0px 0px 5px"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="username" class="form-control" value=""
                                                   placeholder="Nombre de Usuario" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="tel" class="form-control" id="formGroupInput5" placeholder="Nombre de Usuario" pattern="" required>
                                        </div>  -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style=" border-radius: 5px 0px 0px 5px"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control" value=""
                                                   placeholder="Contraseña" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña" required>
                                        </div>-->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style=" border-radius: 5px 0px 0px 5px"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                   value=""
                                                   placeholder="Repetir Contraseña" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="password" class="form-control" id="InputPassword2" placeholder="Repetir contraseña" required>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="form-group form-check" style="margin-top: 2rem">
                                    <input type="checkbox" class="form-check-input" id="Check1" required>
                                    <label class="form-check-label" for="Check1">He leído y acepto los </label>
                                    <a target="blank" href="#">Términos y Condiciones del servicio</a>
                                </div>
                                <div style="text-align: center">
                                    <a class="btn btn-secondary" style="margin-top: 1.5em;" href="#" role="button">Cancelar</a>
                                    <button type="submit" class="btn button_hov" style="margin-top: 1.5em;">Registrar
                                    </button>
                                </div>
                            </form>
                            <!-------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card" style="border-color: White">
                        <!--<div class="card-header" style="background-color: White; border-color: White ">
                            <p style="color: Grey; font-size: 15px;">La cuenta...</p>
                        </div>-->
                        <div class="card-body">
                            <form id="formularioempresa" method="post" action="{{ url('/admin/register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput">Razón social</label>-->
                                            <input type="text" class="form-control" id="formGroupInput"
                                                   placeholder="Razón social" required pattern="[A-Za-z]+" required
                                                   name="razon_social">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput2">RFC</label>-->
                                            <input type="text" class="form-control" id="formGroupInput2"
                                                   placeholder="RFC" pattern="[A-Za-z0-9]+" required name="rfc">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="FormControlSelect7">Entidad Federativa</label>-->
                                            <select class="form-control" id="FormControlSelect7" name="estado">
                                                <option value="0">Estado...</option>
                                                <option value="1">Aguascalientes</option>
                                                <option value="2">Baja California</option>
                                                <option value="3">Baja California Sur</option>
                                                <option value="4">Campeche</option>
                                                <option value="5">Chiapas</option>
                                                <option value="6">Chihuahua</option>
                                                <option value="7">Ciudad de México</option>
                                                <option value="8">Coahuila</option>
                                                <option value="9">Colima</option>
                                                <option value="10">Durango</option>
                                                <option value="11">Estado de México</option>
                                                <option value="12">Guanajuato</option>
                                                <option value="13">Guerrero</option>
                                                <option value="14">Hidalgo</option>
                                                <option value="15">Jalisco</option>
                                                <option value="16">Michoacán</option>
                                                <option value="17">Morelos</option>
                                                <option value="18">Nayarit</option>
                                                <option value="19">Nuevo León</option>
                                                <option value="20">Oaxaca</option>
                                                <option value="21">Puebla</option>
                                                <option value="22">Querétaro</option>
                                                <option value="23">Quintana Roo</option>
                                                <option value="24">San Luis Potosí</option>
                                                <option value="25">Sinaloa</option>
                                                <option value="26">Sonora</option>
                                                <option value="27">Tabasco</option>
                                                <option value="28">Tamaulipas</option>
                                                <option value="29">Tlaxcala</option>
                                                <option value="30">Veracruz</option>
                                                <option value="31">Yucatán</option>
                                                <option value="32">Zacatecas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput2">Municipio o Delegación</label>-->
                                            <input type="text" class="form-control" id="formGroupInput2"
                                                   placeholder="Municipio o Delegación" pattern="[A-Za-z]+" required
                                                   name="municipio">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput3">Localidad</label>-->
                                            <input type="text" class="form-control" id="formGroupInput3"
                                                   placeholder="Localidad" pattern="[A-Za-z]+" required
                                                   name="localidad">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput2">Colonia</label>-->
                                            <input type="text" class="form-control" id="formGroupInput2"
                                                   placeholder="Colonia" required name="colonia">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput3">Calle principal</label>-->
                                            <input type="text" class="form-control" id="formGroupInput3"
                                                   placeholder="Calle" pattern="[A-Za-z]+" required name="calle">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput3">No. exterior</label>-->
                                            <input type="text" class="form-control" id="formGroupInput3"
                                                   placeholder="No. Ext" pattern="[A-Za-z0-9]+" required name="no_ex">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput">No. interior</label>-->
                                            <input type="text" class="form-control" id="formGroupInput"
                                                   placeholder="No. Int" pattern="[A-Za-z0-9]+" required name="no_in">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput3">Código Postal</label>-->
                                            <input type="text" class="form-control" id="formGroupInput3"
                                                   placeholder="Código Postal" pattern="[0-9]+" required
                                                   name="codigo_postal">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput4">Teléfono</label>-->
                                            <input type="tel" class="form-control" id="formGroupInput4"
                                                   placeholder="Teléfono" pattern="[0-9]+" name="telefono">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <!--<label for="formGroupInput4">Teléfono</label>-->
                                            <input type="email" class="form-control" id="formGroupInput4"
                                                   placeholder="Correo" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style="border-radius: 5px 0px 0px 5px"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="username" class="form-control" value=""
                                                   placeholder="Nombre de Usuario" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="tel" class="form-control" id="formGroupInput5" placeholder="Nombre de Usuario" pattern="" required>
                                        </div>  -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style=" border-radius: 5px 0px 0px 5px"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control" value="password"
                                                   placeholder="Contraseña" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="password" class="form-control" id="InputPassword1" placeholder="Contraseña" required>
                                        </div>-->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text format-icon"
                                                      style=" border-radius: 5px 0px 0px 5px"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="password_confirm" class="form-control" value=""
                                                   placeholder="Repetir Contraseña" required>
                                        </div>
                                        <!--<div class="form-group">
                                            <input type="password" class="form-control" id="InputPassword2" placeholder="Repetir contraseña" required>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="form-group form-check" style="margin-top: 2rem">
                                    <input type="checkbox" class="form-check-input" id="Check1" required>
                                    <label class="form-check-label" for="Check1">He leído y acepto los </label>
                                    <a target="blank" href="#">Términos y Condiciones del servicio</a>
                                </div>
                                <div style="text-align: center">
                                    <a class="btn btn-secondary" style="margin-top: 1.5em;" href="#" role="button">Cancelar</a>
                                    <button type="submit" class="btn button_hov" style="margin-top: 1.5em;">Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
