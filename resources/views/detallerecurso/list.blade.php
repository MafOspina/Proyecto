@extends('layouts/contentNavbarLayout')

@section('title', 'DetalleRecursos')

@section('content')


      <h1>Detalle Recurso
        <a type="button" class="btn btn-outline-dark" href="{{ route('detallerecursos.create')}}"><i class="fa fa-plus"></i>Agregar Detalle Recurso</a>
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
          <tr>
            <th>Id</th>
            <th>Cantidad</th>
            <th>Tipo Recurso</th>
            <th>Id Recurso</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($detallerecursos as $detallerecurso)

          <tr >
              <td>{{ $detallerecurso -> id }}</td>
              <td>{{ $detallerecurso -> cantidad }}</td>
              <td>{{ $detallerecurso -> tipo_recurso }}</td>
              <td>{{ $detallerecurso -> recurso_id }}</td>
              <td>
               
                  <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('detallerecursos.edit', $detallerecurso) }}"
                      onclick="return confirm('Estás seguro que quieres editar este detalle recurso?');">
                      <i class="bi bi-pencil"></i></a>


                  <form action="{{ route('detallerecursos.destroy', $detallerecurso) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este detalle recurso?');"><i class="bi bi-trash"></i></button>
                  </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
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

        <li class="list-group-item list-group-item-primary"><a href="index">Agregar Recurso</a></li>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>



@endsection
