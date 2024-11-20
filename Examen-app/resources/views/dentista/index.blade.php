<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de dentistas</h1>
    @csrf
    @method('delete')
    <ul>
        @foreach($dentista as $dentista)
        <li>
            {{ $dentista->nombre }} {{ $dentista->apellido }} 
            <a href="/dentista/edit/{{$dentista->id}}">Editar dentista</a>
            <a href="/dentista/delete/{{$dentista->id}}">Eliminar dentista</a>
        </li>
        @endforeach
    </ul>
    <br>
    <a href="/dentista/create">Crear dentista</a>
</body>
</html>