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
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('recursos.edit', $recurso) }}"
                      onclick="return confirm('Estás seguro que quieres editar este recurso?');">
                      <i class="bi bi-pencil"></i></a>


                  <form action="{{ route('recursos.destroy', $recurso) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este recurso?');"><i class="bi bi-trash"></i></button>
                  </form>
                <div>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection
