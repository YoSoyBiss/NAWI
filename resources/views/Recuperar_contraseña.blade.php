<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .recover-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        .recover-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .recover-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .recover-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .recover-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .recover-container .options {
            text-align: center;
            margin-top: 10px;
        }
        .recover-container .options a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 10px;
        }
        .recover-container .options a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="recover-container">
    <h2>Recuperar Contraseña</h2>
    <form action="/forgot-password" method="POST">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="submit" value="Enviar enlace de recuperación">
    </form>
    <div class="options">
        <a href="/login">Iniciar Sesión</a> |
        <a href="/register">Registrarse</a>
    </div>
</div>

</body>
</html>