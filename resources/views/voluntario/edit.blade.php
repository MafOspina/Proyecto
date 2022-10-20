<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" th:href="@{/css/styles.css}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.css%22%3E">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js%22%3E"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css%22%3E">
 
</head>
<body>
    <div class="container-fluid">
        <h1>Formulario Voluntario</h1>
        <h1>Editar</h1>

        <form method="POST" action="{{ route('voluntarios.update',  $voluntario ->id ) }}" :voluntario="$voluntario" style="width: 35rem;" class="mx-auto">

            @csrf
            @method('PUT')

            <div class="col-md-10">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $voluntario -> nombre) }}">
                <div class="form-text text-danger">{{ $errors->first('nombre') }}</div>
            </div>
            <div class="col-md-10">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $voluntario -> apellido) }}">
                <div class="form-text text-danger">{{ $errors->first('apellido') }}</div>
            <div class="col-md-10">
                <label for="Nomdoc">Número de documento</label>
                <input type="text" class="form-control" id="numDoc" name="numDoc" value="{{ old('numDoc', $voluntario -> numDoc) }}">
                <div class="form-text text-danger">{{ $errors->first('numDoc') }}</div>
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="TI" {{ $voluntario->tipoDoc == 'TI' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio1">TI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="CC"{{ $voluntario->tipoDoc == 'CC' ? 'checked' : '' }} >
                    <label class="form-check-label" for="inlineRadio2">CC</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoDoc" id="tipoDoc" value="CE" {{ $voluntario->tipoDoc == 'CE'? 'checked' : '' }} >
                    <label class="form-check-label" for="inlineRadio3">CE</label>
                </div>
                    <div class="form-text text-danger">{{ $errors->first('tipoDoc') }}</div>
            </div>

             <div class="col-md-10">
                <label for="telefono">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo', $voluntario -> correo) }}">
                <div class="form-text text-danger">{{ $errors->first('correo') }}</div>
            </div>

            <div class="col-md-10">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $voluntario -> telefono) }}">
                <div class="form-text text-danger">{{ $errors->first('telefono') }}</div>
            </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
