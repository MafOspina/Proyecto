@extends('layouts/contentNavbarLayout')

@section('title', 'Usuarios')

@section('content')


      <h1>Usuario
        <a type="button" class="btn btn-outline-dark" href="{{ route('usuarios.create')}}"><i class="fa fa-plus"></i>Agregar Usuario</a>
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
            <th>Apellido</th>
            <th>Tipo de Doc</th>
            <th>Num Documento</th>
            <th>correo</th>
            <th>Contraseña</th>
            <th>Tipo de User</th>
            <th>Estado</th>
            <th>acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)

          <tr >
              <td>{{ $usuario -> id }}</td>
              <td>{{ $usuario -> nombre }}</td>
              <td>{{ $usuario -> apellido }}</td>
              <td>{{ $usuario -> tipo_doc}}</td>
              <td>{{ $usuario -> num_doc }}</td>
              <td>{{ $usuario -> correo }}</td>
              <td>{{ $usuario -> contrasena }}</td>
              <td>{{ $usuario -> tipo_user }}</td>
              <td>{{ $usuario -> estado }}</td>
              <td>
               
                  <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('usuarios.edit', $usuario) }}"
                      onclick="return confirm('Estás seguro que quieres editar este usuario?');">
                      <i class="bi bi-pencil"></i></a>


                  <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este usuario?');"><i class="bi bi-trash"></i></button>
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

        <li class="list-group-item list-group-item-primary"><a href="index">Agregar Usuario</a></li>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>



@endsection
