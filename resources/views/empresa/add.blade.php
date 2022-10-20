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
<form method="post" action="{{ route('empresas.store') }}" enctype="multipart/form-data">
@csrf
        <label>Nombre:</label><br>
        <input type="text" name="nomEmp" value="{{ old('nomEmp') }}"><br>
        <span>{{ $errors->first('nomEmp') }}</span><br>
        
        <label>Nit:</label><br>
        <input type="number" name="nitEmp" value="{{ old('nitEmp') }}"><br>
        <span>{{ $errors->first('nitEmp') }}</span><br>
        
        <label>Telefono:</label><br>
        <input type="text" name="telEmp" value="{{ old('telEmp') }}"><br>
        <span>{{ $errors->first('telEmp') }}</span>
            
        <label>Dirrección:</label><br>
        <input type="text" name="dirreEmp" value="{{ old('dirreEmp') }}"><br>
        <span>{{ $errors->first('dirreEmp') }}</span><br>
        

        <select name="estEmp">
            <option value="1">Habilitado</option>
            <option value="0">Inactivo</option>
        </select><br>
        <button type="submit" value="Agregar" name="accion">Agregar</button>
    </form>
    </center>
</body>
</html>