<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css styles/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Nunito:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-container">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <h2>Iniciar Sesión</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <div class="options">
        <a href="/registro">Registrarse</a> |
        <a href="/Recuperar_contraseña">Recuperar Contraseña</a>
    </div>
</div>

</body>
</html>


