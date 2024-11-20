<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nuevo cliente</h1>
    <form method="POST" action="/cliente/store">
        @csrf
        <p>Nombre: <input type="text" name="nombre" require></p>
        <p>Apellido: <input type="text" name="apellido" require></p>
        <p>DNI: <input type="text" name="dni" require></p>
        <p>Fecha de nacimiento: <input type="date" name="fecha_nacimiento"></p>
        <!-- No me aparecen los dentistas y ademas se me crean mas 'option' -->
        @foreach($dentista as $dentista)
        <select name="{{ $dentista->id }}">
            <option value="{{ $dentista->nombre }} {{ $dentista->apellido }}"></option>          
        </select>
        @endforeach
        <br><br>
        <input type="submit" value="Crear dentista">
    </form>
    <br>
    <a href="/cliente/index">Volver a la lista de clientes</a>
    <br>
    @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
</body>
</html>