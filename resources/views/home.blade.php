<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e5f5ee;
            color: #333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            border-bottom: 2px solid #ccc;
        }

        header .logo {
            height: 60px;
        }

        header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        header .logout {
            text-decoration: none;
            color: #FFC0CB;
            font-weight: bold;
        }

        main {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            height: calc(100vh - 120px); /* Altura ajustada para la pantalla completa menos la altura del header */
        }

        .left-section, .right-section {
            flex: 1;
            padding: 50px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .left-section {
            background-color: #FFFACD;
            margin-right: -10px; /* Separación entre las dos secciones */
            margin-top: -40px;
            margin-left: -40px;
            margin-bottom: -55px;
        }

        .right-section {
            background-color: #f0f3ff;
            margin-left: 10px;
            margin-top: -40px;
            margin-right: -40px;
            margin-bottom: -55px;
        }

        .left-section .axolotl-image {
            width: 200px;
            margin-bottom: 20px;
        }

        .left-section h1 {
            font-size: 2.5rem;
            color: #62959a;
            margin-bottom: 10px;
        }

        .left-section p {
            font-size: 1.2rem;
            color: #555;
        }

        .right-section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .right-section p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <header>
        <img src="public/images/logo.png" alt="Logo" class="logo">
        <nav>
            <a href="#">Cuentos</a>
            <a href="#">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="#" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <section class="left-section">
            <h1>Nawi</h1>
            <img src="public/images/logo.png" alt="Axolotl" class="axolotl-image">
            <p>¡Atrevete a conocer más sobre los cuentos de nuestro México!</p>
        </section>
        
        <section class="right-section">
            <h2>¡Te damos la bienvenida!</h2>
            <p>Nos complace darte la bienvenida a Nawi, tu portal educativo dedicado a preservar y compartir la rica herencia cultural de México. Nuestra misión es llevar las narrativas tradicionales de México a todos los rincones del mundo, proporcionando una experiencia de aprendizaje interactiva y accesible para todos.</p>
        </section>
    </main>
</body>
</html>
