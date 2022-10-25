@extends('layouts/contentNavbarLayout')

@section('title', 'DetalleRecursos')

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Agregar detalle recurso</h4>
      </div>
      <div class="card-body">

        <form method="POST" action="{{ route('detallerecursos.store') }}" >

            @csrf

            <div class="mb-3">
              <label class="form-label" for="cantidad">Cantidad</label>
              <div class="input-group input-group-merge">
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad') }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('cantidad') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="tipo_recurso">Tipo recurso</label>
              <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="tipo_recurso" name="tipo_recurso" value="{{ old('tipo_recurso') }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('tipo_recurso') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="recurso_id">Tipo recurso</label>
              <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="recurso_id" name="recurso_id" value="{{ old('recurso_id') }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('recurso_id') }}</div>
            </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
