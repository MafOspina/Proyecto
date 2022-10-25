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
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('detallerecursos.edit', $detallerecurso) }}"
                      onclick="return confirm('Estás seguro que quieres editar este detalle recurso?');">
                      <i class="bi bi-pencil"></i></a>


                  <form action="{{ route('detallerecursos.destroy', $detallerecurso) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este detalle recurso?');"><i class="bi bi-trash"></i></button>
                  </form>
                </div>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection
