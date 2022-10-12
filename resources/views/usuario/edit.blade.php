@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios')

@section('content')
    <div class="container-fluid">
        <h1>Formulario Usuarios</h1>
        <h1>Editar</h1>

        <form method="POST" action="{{ route('usuarios.update',  $usuario ->id ) }}" :usuario="$usuario" style="width: 35rem;" class="mx-auto">

            @csrf
            @method('PUT')

            <div class="col-md-10">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $usuario -> nombre) }}">
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>
            <div class="col-md-10">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $usuario -> apellido) }}">
                <div class="form-text text-danger">{{ $errors->first('apellido') }}</div>
            <div class="col-md-10">
                <label for="tipo_doc">Tipo Documento</label>
                <select class="form-control" id="tipo_doc" name="tipo_doc">
                    <option value="CC , {{ old('tipo_doc') == 'CC' ? 'select':'' }}">CEDULA DE CIUDADANIA</option>
                    <option value="TI , {{ old('tipo_doc') == 'TI' ? 'select':'' }}">TARJETA DE IDENTIDAD</option>
                    <option value="CE , {{ old('tipo_doc') == 'CE' ? 'select':'' }}">CEDULA DE EXTRANGERIA</option>
                </select>
                <div class="form-text text-danger">{{ $errors->first('tipo_doc') }}</div>
            </div>
            <div class="col-md-10">
                <label for="num_doc">Número de documento</label>
                <input type="text" class="form-control" id="num_doc" name="num_doc" value="{{ old('num_doc', $usuario -> num_doc) }}">
                <div class="form-text text-danger">{{ $errors->first('num_doc') }}</div>
            </div>
            <div class="col-md-10">
                <label for="telefono">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo', $usuario -> correo) }}">
                <div class="form-text text-danger">{{ $errors->first('correo') }}</div>
            </div>
            <div class="col-md-10">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" value="{{ old('contrasena', $usuario -> contrasena) }}">
                <div class="form-text text-danger">{{ $errors->first('contrasena') }}</div>
            </div>
            <div class="col-md-10">
                <label for="tipo_user">Tipo Usuario</label>
                <select class="form-control" id="tipo_user" name="tipo_user">
                    <option value="1">ADMINISTRADOR DEL SISTEMA</option>
                    <option value="2">ADMINISTRACION</option>
                    <option value="3">LOGISTICA</option>
                </select>
                <div class="form-text text-danger">{{ $errors->first('tipo_user') }}</div>
            </div>
            <div class="col-md-10">
                <label for="estado">ESTADO</label>
                <input type="checkbox" id="estado" name="estado" value="{{ old('estado', $usuario -> estado) }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


    
    <script>
       console.log("${cliented}");
        var datat = document.querySelector("#table");
        var dataTable = new DataTable("#table", {
            perPage: 10,
            labels: {
                placeholder: "Busca por un campo...",
                perPage: "{select} registros por página",
                noRows: "No se encontraron registros",
                info: "Mostrando {start} a {end} de {rows} registros",
            }
        });

        <li class="list-group-item list-group-item-primary"><a href="index">Agregar Voluntario</a></li>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>



@endsection

