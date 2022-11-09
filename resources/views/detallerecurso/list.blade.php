@extends('layouts/contentNavbarLayout')

@section('title', 'DetalleRecursos')

@section('content')

      <h1>Asignar Recursos</h1>

      <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="col-sm-12">
                    <div class="card-body">
                    Tipo Recurso
                    <form method="post" action="{{ route('detallerecursos.store') }}" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="evento" value="{{ $evento -> id }}">
                        <select name="recurso">
                          @foreach($recursos as $r)
                            <option value="{{ $r -> id }}">{{ $r -> nomRec }}</option>
                          @endforeach
                        </select>
                        Cantidad
                        <input type="number" name="cantidad">
                        <input type="submit" value="Registrar">
                      </form>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 order-0">
                <div class="card">
                  <div class="col-sm-12">
                    <div class="card-body">
                      <h5>Evento # {{ $evento -> id }} </h5>
                      <p>Recursos asignados:</p>
                      @foreach($detallerecursos as $a)
                        <span>{{ $a -> Recurso -> nomRec }}</span>{{ $a -> cantidad }}
                      @endforeach
                    </div>
                  </div>
                </div>
            </div>
      </div>
      <!--<a type="button" class="btn btn-outline-dark" href="{{ route('detallerecursos.create')}}"><i class="fa fa-plus"></i>Agregar Detalle Recurso</a>
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
    </div>-->


@endsection
