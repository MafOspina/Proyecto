<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mobius1/vanilla-Datatables@latest/vanilla-dataTables.min.js"></script>
    <title>Agregar nuevo terreno</title>
</head>
<body>
    <center>
<form method="post" action="{{ route('terrenos.store') }}" enctype="multipart/form-data">
@csrf
        <label>Nombre:</label><br>
        <input type="text" name="nomTer" value="{{ old('nomTer') }}"><br>
        <span>{{ $errors->first('nomTer') }}</span><br>
        
        <label>Ubicación:</label><br>
        <input type="text" name="ciudadTer" value="{{ old('nomTer') }}"><br>
        <span>{{ $errors->first('ciudadTer') }}</span><br>
        
        <label>Tipo Terreno:</label><br>
        <input type="text" name="tipTer" value="{{ old('nomTer') }}"><br>
        <span>{{ $errors->first('tipTer') }}</span>
            
        <label>Descripción:</label><br>
        <textarea name="descTer" value="{{ old('nomTer') }}"></textarea><br>
        <span>{{ $errors->first('descTer') }}</span><br>
        
        <label>Extensión(Ha):</label><br>
        <input type="number" name="extensionTer"><br>
        <span>{{ $errors->first('extensionTer') }}</span><br>
        
        <label>Terreno Disponible(%):</label><br>
        <input type="number" name="terDispTer" min="1" max="100" value="100"><br>
        <span>{{ $errors->first('terDispTer') }}</span><br>

        <select name="estTer">
            <option value="1">Habilitado</option>
            <option value="0">Inactivo</option>
        </select><br>
        <button type="submit" value="Agregar" name="accion">Agregar</button>
    </form>
    </center>
</body>
</html>