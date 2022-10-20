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
                    
                            <td><a href="{{ route('empresas.edit', $e ) }}">Modificar</a></td>
                            
                            <td><form action="{{ route('empresas.destroy', $e ) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro que quieres eliminar esta empresa?');">Eliminar</button>
                            </form></td>
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
