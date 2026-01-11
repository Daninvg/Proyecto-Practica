<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Bienvenido al inicio de sesion.</h1>
    <h3>¿Aun no realizas tu registro? Crea una nueva cuenta aqui -> <a href="{{ route('usuario.create') }}">Click aqui</a><-</h3><br>
    <h2>Usuarios registrados:</h2>
        @foreach ($usuario as $user)
            <a href=" {{route('usuario.show', $user->id)}} ">
                {{ $user->nombre }} </a>    
        @endforeach
</body>
</html>