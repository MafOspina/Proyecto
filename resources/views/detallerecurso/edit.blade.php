@extends('layouts/contentNavbarLayout')

@section('title', 'DetalleRecursos')

@section('content')
    <div class="container-fluid">
        <h1>Editar Detalle Recurso</h1>

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

        <li class="list-group-item list-group-item-primary"><a href="index">Agregar Detalle Recurso</a></li>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>



@endsection

