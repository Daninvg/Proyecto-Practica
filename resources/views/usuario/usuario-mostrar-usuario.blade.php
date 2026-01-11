<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion</title>
</head>
<body>
    <h1>La informacion del usuario</h1>     
    <p>Nombre: {{ $usuario->nombre }}</p>
     <p>Nombre: {{ $usuario->apellido }}</p>
      <p>Nombre: {{ $usuario->email }}</p>
</body>
</html>