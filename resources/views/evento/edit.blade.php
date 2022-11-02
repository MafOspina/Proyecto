<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
</head>
<body>
    <center>
        <h1>Editar el Evento</h1>
            <form method="POST" action="{{ route('eventos.update', $evento) }}">

            @csrf
            @method('PUT')

            <label>fecha:</label><br>
            <input type="date" name="fechaEve" value="{{ old('fechaEve', $evento -> fechaEve) }}"><br>
            <span>{{ $errors->first('fechaEve') }}</span><br>
        
        <label>Hora de inicio:</label><br>
        <input type="time" name="horaIniEve" value="{{ old('horaIniEve', $evento -> horaIniEve) }}"><br>
        <span>{{ $errors->first('horaIniEve') }}</span>
            
        <label>Reporte:</label><br>
        <input type="" name="reporteEve" value="{{ old('reporteEve' , $evento -> reporteEve) }}"><br>
        <span>{{ $errors->first('reporteEve') }}</span><br>
        
        <label>Número de Arboles:</label><br>
        <input type="number" name="numArbEve" value="{{ old('numArbEve' , $evento -> numArbEve) }}"><br>
        <span>{{ $errors->first('numArbEve') }}</span><br>
        
        <label>Tipo de Evento</label>
            <select name="tipEve" >
                <option value="{{ old('tipEve' , $evento -> tipEve) }}">{{ $evento -> tipEve}}</option>
                <option value="1">Público</option>
                <option value="2">Privado</option>
                <option value="3">Empresarial</option>
            </select>
            <br>
        <select name="estEve">
            <option value="1">Habilitado</option>
            <option value="0">Inactivo</option>
        </select><br>

        <label>Terreno:</label><br>
        <select name="terreno">
            <option value="">Elija el terreno</option>
            @foreach($terrenos as $t)
                <option value="{{ $t -> id }}" @select(old("terreno") == $t)>{{ $t -> nomTer }}</option>
            @endforeach
        </select><br>
        <span>{{ $errors->first('terreno') }}</span><br>

        <button type="submit" value="Agregar" name="accion">Agregar</button>
    </form>
    </center>
</body>
</html>