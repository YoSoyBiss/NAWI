<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css styles/Recuperar_contraseña.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Nunito:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="recover-container">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <h2>Recuperar Contraseña</h2>
    <form action="/Recuperar_contraseña" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="submit" value="Enviar enlace de recuperación">
    </form>
    <div class="options">
        <a href="/login">Iniciar Sesión</a> |
        <a href="/registro">Registrarse</a>
    </div>
</div>

</body>
</html>
