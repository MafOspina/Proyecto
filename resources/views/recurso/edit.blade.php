@extends('layouts/contentNavbarLayout')

@section('title', 'Recursos')

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Editar recurso</h4>
      </div>

      <div class="card-body">

        <form method="POST" action="{{ route('recursos.update',  $recurso ->id ) }}" :recurso="$recurso" >

            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label" for="nombre">Nombre</label>
              <div class="input-group input-group-merge">
                <span id="nombre" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $recurso -> nombre) }}"/>
              </div>
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="descripcion">Descripción</label>
              <div class="input-group input-group-merge">
                <span id="descripcion" class="input-group-text"><i class="bx bx-comment-detail"></i></span>
                <textarea  class="form-control" name="descripcion" rows="3"> {{ Request::old('descripcion',  $recurso->descripcion) }}</textarea>
              </div>
                <div class="form-text text-danger">{{ $errors->first('descripcion') }}</div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            
          </form>
      </div>
    </div>
  </div>
</div>

@endsection
