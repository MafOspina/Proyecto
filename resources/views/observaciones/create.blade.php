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
        <h1>Obervaciones</h1>
        <h1>Agregar</h1>
        <form method="POST" action="{{ route('observaciones.store') }}" style="width: 35rem;" class="mx-auto">

            @csrf

            <div class="col-md-10">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" value="{{ old('descripcion') }}"></textarea>
                <div class="form-text text-danger">{{ $errors->first('descripcion') }}</div>
            </div><br>

            <div class="col-md-10">
            <select class="form-select" name="tipoObservacion" id="tipoObservacion" aria-label="Default select example">
                <option selected>Seleccione el tipo de observación</option>
                <option value="evento">Evento</option>
                <option value="logistica">Logística</option>
                <option value="voluntarios">Voluntarios</option>
                <option value="recursos">Recursos</option>
                <option value="terreno">Terreno</option>
              </select>
              <div class="form-text text-danger">{{ $errors->first('tipoObservacion') }}</div>
            </div> <br>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
