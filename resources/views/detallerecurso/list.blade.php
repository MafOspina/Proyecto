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
                      <h5>{{ $herramienta != "" ? 'Herramientas' : ' ' }}</h5>
                      @foreach($herramienta as $h)
                        <b>{{ $h -> nomRec }}</b><span>{{ $h -> cantidad }}</span><br>
                      @endforeach
                      <h5>Insumos:</h5>
                      @foreach($insumo as $i)
                        <b>{{ $i -> nomRec }}</b><span>{{ $i -> cantidad }}</span><br>
                      @endforeach
                      <h5>Infraestructura:</h5>
                      @foreach($infra as $in)
                        <b>{{ $in -> nomRec }}</b><span>{{ $in -> cantidad }}</span><br>
                      @endforeach
                      <h5>Tecnologia:</h5>
                      @foreach($tec as $t)
                        <b>{{ $t -> nomRec }}</b><span>{{ $t -> cantidad }}</span><br>
                      @endforeach
                      <!--@foreach($detallerecursos as $a)
                          <span>{{ $a -> Recurso -> nomRec }}</span>{{ $a -> cantidad }}
                      @endforeach-->
                    </div>
                  </div>
                </div>
            </div>
      </div>
@endsection
