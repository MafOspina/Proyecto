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

        <form method="POST" action="{{ route('detallerecursos.update',  $detallerecurso ->id ) }}" :recurso="$detallerecurso" style="width: 35rem;" class="mx-auto">

            @csrf
            @method('PUT')

            <div class="col-md-10">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad', $detallerecurso -> cantidad) }}">
                <div class="form-text text-danger">{{ $errors->first('cantidad') }}</div>
            </div>
            <div class="col-md-10">
                <label for="tipo_recurso">Tipo Recurso</label>
                <input type="number" class="form-control" id="tipo_recurso" name="tipo_recurso" value="{{ old('tipo_recurso', $detallerecurso -> tipo_recurso) }}">
                <div class="form-text text-danger">{{ $errors->first('tipo_recurso') }}</div>
            </div>
            <div class="col-md-10">
                <label for="recurso_id">Recurso ID</label>
                <input type="number" class="form-control" id="recurso_id" name="recurso_id" value="{{ old('recurso_id', $detallerecurso -> recurso_id) }}">
                <div class="form-text text-danger">{{ $errors->first('recurso_id') }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection
