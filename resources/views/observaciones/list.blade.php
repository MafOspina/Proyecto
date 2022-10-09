@extends('layouts/contentNavbarLayout')

@section('title', 'Observaciones')

@section('content')

    <h1>Observaciones
        <a type="button" class="btn btn-outline-dark" href="{{ route('observaciones.create')}}"><i class="fa fa-plus"></i>Agregar Observación</a>
    </h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <hr class="my-5">
    <div class="card">
    <div class="table-responsive">
      <table class="table table-hover table-striped">
        <thead>
          <th>Id</th>
          <th>Descripción</th>
          <th>Tipo</th>
          <th colspan="2">acciones</th>
        </thead>

        <tbody>
                @foreach ($observaciones as $observacione)

                <tr >
                    <td>{{ $observacione -> id }}</td>
                    <td>{{ $observacione -> descripcion }}</td>
                    <td>{{ $observacione -> tipoObservacion }}</td>

                   <td>
                        <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('observaciones.edit', $observacione) }}"
                            onclick="return confirm('Estás seguro que quieres editar esta observación?');">
                            <i class="bi bi-pencil"></i></a>


                        <form action="{{ route('observaciones.destroy', $observacione) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar esta Observación?');"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <li class="list-group-item list-group-item-primary"><a href="../index">Inicio</a></li>
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
