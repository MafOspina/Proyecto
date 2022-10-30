@extends('layouts/contentNavbarLayout')

@section('title', 'Empresas')

@section('content')

        <h1>Empresas</h1>
        <a href="{{ route('empresas.create') }}"><i class="bi bi-plus-circle"></i>&nbsp;Agregar</a>
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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Nit</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($empresas as $e)
                           <tr>
                            <td>{{ $e -> id }}</td>
                            <td>{{ $e -> nomEmp }}</td>
                            <td>{{ $e -> nitEmp }}</td>
                            <td>{{ $e -> telEmp }}</td>
                            <td>{{ $e ->  dirreEmp }}</td>
                            <td>{{ $e -> estEmp }}</td>

                            <td>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <a role="button" class="btn btn-outline-warning btn-sm" href="{{  route('empresas.edit', $e ) }}"
                                onclick="return confirm('Estás seguro que quieres editar este usuario?');">
                                <i class="bi bi-pencil"></i></a>

                                <form action="{{ route('empresas.destroy', $e) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este usuario?');"><i class="bi bi-trash"></i></button>
                              </form>

                              </div>
                              
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
@endsection
