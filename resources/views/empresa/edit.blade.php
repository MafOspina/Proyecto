@extends('layouts/contentNavbarLayout')

@section('title', 'Voluntarios')

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Editar empresa</h4>
      </div>
      <div class="card-body">

        <form method="POST" action="{{ route('empresas.update', $empresa) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label class="form-label" for="nomEmp">Nombre</label>
          <div class="input-group input-group-merge">
            <span id="nomEmp" class="input-group-text"><i class='bx bx-buildings'></i></span>
            <input type="text" class="form-control" id="nomEmp" name="nomEmp" value="{{ old('nomEmp', $empresa -> nomEmp) }}"/>
          </div>
            <div class="form-text text-danger">{{ $errors->first('nomEmp') }}</div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="nitEmp">Nit</label>
          <div class="input-group input-group-merge">
            <span id="nitEmp" class="input-group-text"><i class='bx bx-briefcase-alt-2'></i></span>
            <input type="number" class="form-control" id="nitEmp" name="nitEmp" value="{{ old('nitEmp', $empresa -> nitEmp) }}"/>
          </div>
            <div class="form-text text-danger">{{ $errors->first('nitEmp') }}</div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="telEmp">Teléfono</label>
          <div class="input-group input-group-merge">
            <span id="telEmp" class="input-group-text"><i class="bx bx-phone"></i></span>
            <input type="number" class="form-control" id="telEmp" name="telEmp" value="{{ old('telEmp' , $empresa -> telEmp) }}"/>
          </div>
            <div class="form-text text-danger">{{ $errors->first('telEmp') }}</div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="dirreEmp">Dirección</label>
          <div class="input-group input-group-merge">
            <span id="dirreEmp" class="input-group-text"><i class='bx bx-map-pin'></i></span>
            <input type="text" class="form-control" id="dirreEmp" name="dirreEmp" value="{{ old('dirreEmp', $empresa -> dirreEmp) }}"/>
          </div>
            <div class="form-text text-danger">{{ $errors->first('dirreEmp') }}</div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="estEmp">Estado</label>
          <select class="form-select" name="estEmp" id="bs-validation-country">
              <option value="1" {{ $empresa->estEmp == '1' ? 'selected' : '' }}>Habilitado</option>
              <option value="0" {{ $empresa->estEmp == '0' ? 'selected' : '' }}>Inhabilitado</option>
            </select>
            <div class="form-text text-danger">{{ $errors->first('estTer') }}</div>
        </div> <br>

        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection

