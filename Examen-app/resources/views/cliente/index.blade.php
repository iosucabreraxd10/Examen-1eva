<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    @csrf
    @method('delete')
    <ul>
        @foreach($cliente as $cliente)
        <li>
            {{ $cliente->nombre }} {{ $cliente->apellido }} 
            @foreach($dentista as $dentista)
            <select name="{{ $dentista->id }}">
                <option value="{{ $dentista->nombre }} {{ $dentista->apellido }}"></option>          
            </select>
            @endforeach
        </li>
        @endforeach
    </ul>
    <br>
    <a href="/cliente/create">Crear cliente</a>
</body>
</html>