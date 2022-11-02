@extends('layouts/contentNavbarLayout')

@section('title', 'Voluntarios')

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Agregar voluntario</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('voluntarios.update',  $voluntario ->id ) }}" :voluntario="$voluntario">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label" for="nombre">Nombre</label>
              <div class="input-group input-group-merge">
                <span id="nombre" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $voluntario -> nombre) }}"/>
              </div>
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="apellido">Apellido</label>
              <div class="input-group input-group-merge">
                <span id="apellido" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $voluntario -> apellido) }}"/>
              </div>
                <div class="form-text text-danger">{{ $errors->first('apellido') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="Nomdoc">Número de documento</label>
              <div class="input-group input-group-merge">
                <span id="Nomdoc" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
                <input type="number" class="form-control" id="numDoc" name="numDoc" value="{{ old('numDoc', $voluntario -> numDoc) }}"/>
              </div>
                <div class="form-text text-danger">{{ $errors->first('numDoc') }}</div>
            </div>


            <div class="mb-3 form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="TI" {{ $voluntario->tipoDoc == 'TI' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio1">TI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="CC"{{ $voluntario->tipoDoc == 'CC' ? 'checked' : '' }} >
                    <label class="form-check-label" for="inlineRadio2">CC</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="CE" {{ $voluntario->tipoDoc == 'CE'? 'checked' : '' }} >
                    <label class="form-check-label" for="inlineRadio3">CE</label>
                </div>
                    <div class="form-text text-danger">{{ $errors->first('tipoDoc') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="correo">Correo</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" for="correo" class="form-control" id="correo" name="correo" value="{{ old('correo', $voluntario -> correo) }}"/>
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              <div class="form-text text-danger">{{ $errors->first('correo') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="telefono">Teléfono</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="number" for="telefono" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $voluntario -> telefono) }}"/>
              </div>
              <div class="form-text text-danger">{{ $errors->first('telefono') }}</div>
            </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
      </div>
    </div>
  </div>
</div>

@endsection
