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
                            <td><a href="{{ route('terrenos.edit', $t ) }}">Modificar</a></td>
                            
                            <td><form action="{{ route('terrenos.destroy', $t ) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro que quieres eliminar este terreno?');">Eliminar</button>
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
