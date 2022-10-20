<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Terreno</title>
</head>
<body>
    <center>
        <h1>Editar el terreno</h1>
            <form method="POST" action="{{ route('terrenos.update', $terreno) }}">

            @csrf
            @method('PUT')


            <label>Nombre:</label><br>
            <input type="text" name="nomTer" value="{{ old('nomTer', $terreno -> nomTer) }}"><br>
            <span>{{ $errors->first('nomTer') }}</span><br>
            
            <label>Ubicación:</label><br>
            <input type="text" name="ciudadTer" value="{{ old('ciudadTer', $terreno -> ciudadTer) }}"><br>
            <span>{{ $errors->first('ciudadTer') }}</span><br>
            
            <label>Tipo Terreno:</label><br>
            <input type="text" name="tipTer" value="{{ old('tipTer', $terreno -> tipTer )}}"><br>
            <span>{{ $errors->first('tipTer') }}</span>
                
            <label>Descripción:</label><br>
            <textarea name="descTer">{{ old('descTer', $terreno -> descTer )}}</textarea><br>
            <span>{{ $errors->first('descTer') }}</span><br>
            
            <label>Extensión(Ha):</label><br>
            <input type="number" name="extensionTer" value="{{ old('extensionTer', $terreno -> extensionTer) }}"><br>
            <span>{{ $errors->first('extensionTer') }}</span><br>
            
            <label>Terreno Disponible(%):</label><br>
            <input type="number" name="terDispTer" min="1" max="100" value="{{ old('terDispTer', $terreno -> terDispTer )}}"><br>
            <span>{{ $errors->first('terDispTer') }}</span><br>

            <select name="estTer">
                <option value="1">Habilitado</option>
                <option value="0">Inactivo</option>
            </select><br>
            <button type="submit" value="Agregar" name="accion">
                Actualizar
            </button>
</form>
    </center>
    
</body>
</html>