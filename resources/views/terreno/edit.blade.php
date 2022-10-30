@extends('layouts/contentNavbarLayout')

@section('title', 'Voluntarios')

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Editar terreno</h4>
      </div>
      <div class="card-body">

        <form method="POST" action="{{ route('terrenos.update', $terreno) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label" for="nomTer">Nombre</label>
              <div class="input-group input-group-merge">
                <span id="nomTer" class="input-group-text"><i class='bx bxs-tree'></i></span>
                <input type="text" class="form-control" id="nomTer" name="nomTer" value="{{ old('nomTer', $terreno -> nomTer) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('nomTer') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="ciudadTer">Ubicación</label>
              <div class="input-group input-group-merge">
                <span id="ciudadTer" class="input-group-text"><i class='bx bx-map-pin'></i></span>
                <input type="text" class="form-control" id="ciudadTer" name="ciudadTer" value="{{ old('ciudadTer', $terreno -> ciudadTer) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('ciudadTer') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="descTer">Descripción</label>
              <div class="input-group input-group-merge">
                <span id="descTer" class="input-group-text"><i class='bx bx-detail'></i></span>
                <textarea  class="form-control" name="descTer" rows="3"> {{ Request::old('descTer', $terreno ->descTer) }}</textarea>
              </div>
                <div class="form-text text-danger">{{ $errors->first('descTer') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="tipTer">Tipo de terreno</label>
              <div class="input-group input-group-merge">
                <span id="tipTer" class="input-group-text"><i class='bx bx-list-minus'></i></span>
                <input type="text" class="form-control" id="tipTer" name="tipTer" value="{{  old('tipTer', $terreno -> tipTer) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('tipTer') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="extensionTer">Extensión(Ha)</label>
              <div class="input-group input-group-merge">
                <span id="extensionTer" class="input-group-text"><i class='bx bxs-grid'></i></span>
                <input type="number" class="form-control" id="extensionTer" name="extensionTer" value="{{ old('extensionTer', $terreno -> extensionTer) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('extensionTer') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="terDispTer">Terreno Disponible(%)</label>
              <div class="input-group input-group-merge">
                <span id="terDispTer" class="input-group-text"><i class='bx bx-pie-chart-alt-2'></i></span>
                <input type="number" class="form-control" id="terDispTer" name="terDispTer" min="1" max="100" value="100" value="{{ old('terDispTer', $terreno -> terDispTer ) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('terDispTer') }}</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="estTer">Estado</label>
              <select class="form-select" name="estTer" id="bs-validation-country">
                  <option value="1" {{ $terreno ->estTer == '1' ? 'selected' : '' }}>Habilitado</option>
                  <option value="0" {{ $terreno ->estTer == '0' ? 'selected' : '' }}>Inhabilitado</option>
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
