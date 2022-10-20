<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
</head>
<body>
    <center>
        <h1>Editar la empresa</h1>
            <form method="POST" action="{{ route('empresas.update', $empresa) }}">

            @csrf
            @method('PUT')
            <label>Nombre:</label><br>
        <input type="text" name="nomEmp" value="{{ old('nomEmp', $empresa -> nomEmp) }}"><br>
        <span>{{ $errors->first('nomEmp') }}</span><br>
        
        <label>Nit:</label><br>
        <input type="number" name="nitEmp" value="{{ old('nitEmp', $empresa -> nitEmp) }}"><br>
        <span>{{ $errors->first('nitEmp') }}</span><br>
        
        <label>Telefono:</label><br>
        <input type="text" name="telEmp" value="{{ old('telEmp' , $empresa -> telEmp) }}"><br>
        <span>{{ $errors->first('telEmp') }}</span>
            
        <label>Dirrección:</label><br>
        <input type="text" name="dirreEmp" value="{{ old('dirreEmp', $empresa -> dirreEmp) }}"><br>
        <span>{{ $errors->first('dirreEmp') }}</span><br>
        

        <select name="estEmp">
            <option value="1">Habilitado</option>
            <option value="0">Inactivo</option>
        </select><br>
        <button type="submit" value="Agregar" name="accion">Actualizar</button>
    </form>
    </center>
</body>
</html>