@extends('layouts/contentNavbarLayout')

@section('title', 'Terrenos')

@section('content')

        <h1>Terrenos</h1>
        <a href="{{ route('terrenos.create') }}"><i class="bi bi-plus-circle"></i>&nbsp;Agregar</a>
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
                            <th>Ciudad</th>
                            <th>Descripción</th>
                            <th>Extensión</th>
                            <th>Ter. Disp (%)</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($terrenos as $t)
                           <tr>
                            <td>{{ $t -> id }}</td>
                            <td>{{ $t -> nomTer }}</td>
                            <td>{{ $t -> ciudadTer }}</td>
                            <td>{{ $t -> descTer }}</td>
                            <td>{{ $t -> extensionTer }}</td>
                            <td>{{ $t -> terDispTer }}</td>
                            <td>{{ $t -> tipTer }}</td>
                            <td>{{ $t -> estTer }}</td>
                            <td>

                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <a role="button" class="btn btn-outline-warning btn-sm" href="{{ route('terrenos.edit', $t ) }}"
                                onclick="return confirm('Estás seguro que quieres editar este usuario?');">
                                <i class="bi bi-pencil"></i></a>

                                <form action="{{ route('terrenos.destroy', $t ) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Estás seguro que quieres eliminar este usuario?');"><i class="bi bi-trash"></i></button>
                              </form>

                              </div>
                            </td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>



@endsection
