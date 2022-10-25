@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios')

@section('content')


  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary ">Editar usuario</h4>
      </div>
      <div class="card-body">
      <div class="row">
        <div class="col">

        <form method="POST" action="{{ route('usuarios.update',  $usuario ->id ) }}" :usuario="$usuario" style="width: 35rem;" class="mx-auto">

            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label" for="nombre">Nombre</label>
              <div class="input-group input-group-merge">
                <span id="nombre" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $usuario -> nombre) }}" />
              </div>
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="apellido">Apellido</label>
              <div class="input-group input-group-merge">
                <span id="apellido" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $usuario -> apellido) }}"  />
              </div>
                <div class="form-text text-danger">{{ $errors->first('apellido') }}</div>
            </div>


            <div class="mb-3">
              <label class="form-label" for="num_doc">Número de documento</label>
              <div class="input-group input-group-merge">
                <span id="num_doc" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
                <input type="number" class="form-control" id="num_doc" name="num_doc" value="{{ old('num_doc', $usuario -> num_doc) }}"  />
              </div>
                <div class="form-text text-danger">{{ $errors->first('num_doc') }}</div>
            </div>

            <div class="mb-3 form-group">
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tipo_doc" id="inlineRadio1" value="TI" {{ $usuario->tipo_doc == 'TI' ? 'checked':'' }}  >
                  <label class="form-check-label" for="inlineRadio1">TI</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tipo_doc" id="inlineRadio2" value="CC" {{ $usuario->tipo_doc == 'CC' ? 'checked':'' }}  >
                  <label class="form-check-label" for="inlineRadio2">CC</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tipo_doc" id="inlineRadio3" value="CE" {{ $usuario->tipo_doc == 'CE' ? 'checked':'' }} >
                  <label class="form-check-label" for="inlineRadio3">CE</label>
              </div>
                  <div class="form-text text-danger">{{ $errors->first('tipo_doc') }}</div>
          </div>

        </div>
          <div class="col">

          <div class="mb-3">
            <label class="form-label" for="correo">Correo</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" for="correo" class="form-control" id="correo" name="correo" value="{{ old('correo', $usuario -> correo) }}"/>
              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
            </div>
            <div class="form-text text-danger">{{ $errors->first('correo') }}</div>
          </div>


          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="contrasena">Contraseña</label>
            <div class="input-group input-group-merge">
              <input type="password" id="contrasena" class="form-control" name="contrasena" value="{{ old('contrasena', $usuario -> contrasena) }}"/>
              <span class="input-group-text cursor-pointer" id="contrasena"><i class="bx bx-hide"></i></span>
            </div>
            <div class="form-text text-danger">{{ $errors->first('contrasena') }}</div>
          </div>

          <div class="mb-3">
            <label class="form-label" for="tipo_user">Tipo de usuario</label>
            <select class="form-select" name="tipo_user" id="tipo_user" >
                <option value="" selected>Seleccione</option>
                <option value="1" {{ $usuario->tipo_user == '1' ? 'selected' : '' }}>Administrador del sistema</option>
                <option value="2" {{ $usuario->tipo_user == '2' ? 'selected' : '' }}>Administración</option>
                <option value="3" {{ $usuario->tipo_user == '3' ? 'selected' : '' }}>Logística</option>
              </select>
              <div class="form-text text-danger">{{ $errors->first('tipo_user') }}</div>
          </div>
        </div>


        </div> <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


