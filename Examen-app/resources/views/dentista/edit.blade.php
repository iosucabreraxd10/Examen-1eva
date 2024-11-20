<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar dentista</h1>
<form method="POST" action="/dentista/update/{id}">
        @csrf
        @method('PATCH')
        @foreach ($dentista as $dentista)
        <p>Nombre: <input type="text" name="nombre" value="{{$dentista->nombre}}" require></p>
        <p>Apellido: <input type="text" name="apellido" value="{{$dentista->apellido}}" require></p>
        <p>DNI: <input type="text" name="dni" value="{{$dentista->dni}}" require></p>
        <p>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" value="{{$dentista->fecha_nacimiento}}"></p>
        <select name="en_vacaciones" value="{{$dentista->en_vacaciones}}">
            <option value="1">No</option>      
            <option value="0">Si</option>      
        </select>
        @endforeach
        <br><br>
        <input type="submit" value="Crear dentista">
    </form>
</body>
</html>