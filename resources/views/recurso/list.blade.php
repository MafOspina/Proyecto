@extends('layouts/contentNavbarLayout')

@section('title', 'Recursos')

@section('content')


      <h1>Recurso
        <a type="button" class="btn btn-outline-dark" href="{{ route('recursos.create')}}"><i class="fa fa-plus"></i>Agregar Recurso</a>
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
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($recursos as $recurso)

          <tr >
              <td>{{ $recurso -> id }}</td>
              <td>{{ $recurso -> nombre }}</td>
              <td>{{ $recurso -> descripcion }}</td>
              <td>
               
                  <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('recursos.edit', $recurso) }}"
                      onclick="return confirm('Estás seguro que quieres editar este recurso?');">
                      <i class="bi bi-pencil"></i></a>


                  <form action="{{ route('recursos.destroy', $recurso) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este recurso?');"><i class="bi bi-trash"></i></button>
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
