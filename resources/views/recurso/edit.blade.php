@extends('layouts/contentNavbarLayout')

@section('title', 'Recursos')

@section('content')
    <div class="container-fluid">
        <h1>Editar Recurso</h1>

        <form method="POST" action="{{ route('recursos.update',  $recurso ->id ) }}" :recurso="$recurso" style="width: 35rem;" class="mx-auto">

            @csrf
            @method('PUT')

            <div class="col-md-10">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $recurso -> nombre) }}">
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>
            <div class="col-md-10">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $recurso -> descripcion) }}">
                <div class="form-text text-danger">{{ $errors->first('descripcion') }}</div>
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

