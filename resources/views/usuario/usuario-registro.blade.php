<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="{{ route('usuario-registro') }}" method="POST">
        @csrf
        <h1>nombre</h1>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br>
        <h1>apellido</h1>
        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}">
        <button type="submit" class="btn btn-primary"> Guardar </button> 
    </form>
</body>
</html>