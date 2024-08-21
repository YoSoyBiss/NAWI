<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css styles/resetear_contraseña.css') }}">
</head>
<body>

<div class="reset-container">
    <h2>Restablecer Contraseña</h2>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="Nueva contraseña" required>
        <input type="password" name="password_confirmation" placeholder="Confirmar nueva contraseña" required>
        <input type="submit" value="Restablecer Contraseña">
    </form>
</div>

</body>
</html>