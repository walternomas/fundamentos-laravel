<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel en minutos</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contactos</a></li>
        <li><a href="{{ route('blog.index') }}">Blog</a></li>
    </ul>

    <div>
        @yield('content')
    </div>
</body>
</html>