<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf
        <h1>nombre</h1>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required><br>
        <h1>apellido</h1>
        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" required><br>
        <h1>email</h1>
        <input type="email" name="email" id="email" vañue="{{ old('email') }}" required>
        <button type="submit" class="btn btn-primary"> Guardar </button> 
    </form>
</body>
</html>