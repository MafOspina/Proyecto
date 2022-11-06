@extends('layouts/contentNavbarLayout')

@section('title', 'Eventos')

@section('content')
<link rel="stylesheet" href="{{ asset('css/formadd.css') }}">
<body>
    <div class="root">
        <form method="post" class="form-register" action="{{ route('eventos.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">General</li>
                    <li class="progressbar__option">Terreno</li>
                    <li class="progressbar__option">Logistico</li>
                </ul>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h1 class="form-register__title">NUEVO  EVENTO</h1>
                    </div>
                    <div class="step__body">
                        <label class="form-label" for="nomTer">Fecha</label>
                        <input type="date" class="form-control" id="fecha" min="{{ $now }}" max="{{ $sixmonths }}" name="fechaEve" value="{{ old('fechaEve') }}">
                            <!--<p id="error_date">El campo es obligatorio</p>-->

                        <label class="form-label" for="nomTer">Hora</label>
                        <input type="time" class="form-control" id="hour" name="horaIniEve" value="{{ old('horaIniEve') }}">
                            <!--<p class="error">El campo es obligatorio</p>-->

                        <label class="form-label" for="nomTer">Tipo de Evento</label>
                        <select name="tipEve" class="form-select">
                            <option value="1">Público</option>
                            <option value="2">Privado</option>
                            <option value="3">Empresarial</option>
                        </select>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                    <h1 class="form-register__title mb-0">NUEVO EVENTO</h1>
                        <h2 class="step__title">Terrenos</h2>
                    </div>
                    <div class="step__body">
                    <label>Terreno:</label><br>
                        <select name="terreno" id="terreno" class="form-select"> 
                            <option value="">Elija el terreno</option>
                            @foreach($terrenos as $t)
                                <option value="{{ $t -> id }}" @select(old("terreno") == $t)>{{ $t -> nomTer }}</option>
                            @endforeach
                        </select><br>
                        <label>Número de Arboles:</label><br>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bxs-tree'></i></span>
                            <input type="number" class="form-control" name="numArbEve" id="numarb" value="{{ old('numArbEve') }}"><br>
                        </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                    <h1 class="form-register__title mb-0">NUEVO EVENTO</h1>
                        <h2 class="step__title">Encargado Logistico</h2>
                    </div>
                    <div class="step__body">
                        <select name="usuario" id="logistico" class="form-select">
                            <option value="">Elija el encargado de logistica</option>
                            @foreach($logistico as $u)
                                <option value="{{ $u -> id }}" @select(old("usuario") == $t)>{{ $u -> nombre }}</option>
                            @endforeach
                        </select><br>
                        <!--<input type="text" placeholder="Dato x" class="step__input">
                        <input type="text" placeholder="Dato x" class="step__input">
                        <input type="text" placeholder="Dato x" class="step__input">-->
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button" value="Agregar" name="accion">Agendar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/evento.js') }}"></script>
</body>
@endsection