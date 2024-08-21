<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css styles/login.css') }}">
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="/login" method="POST">
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
