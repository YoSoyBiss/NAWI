<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi</title>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="{{ asset('css styles/home.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="#">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="/login" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <section class="left-section">
            <h1>Nawi</h1>
            <img src="{{ asset('images/logo.png') }}" alt="Axolotl" class="axolotl-image">
            <p>¡Atrevete a conocer más sobre los cuentos de nuestro México!</p>
        </section>
        
        <section class="right-section">
            <h2>¡Te damos la bienvenida!</h2>
            <p>Nos complace darte la bienvenida a Nawi, tu portal educativo dedicado a preservar y compartir la rica herencia cultural de México. Nuestra misión es llevar las narrativas tradicionales de México a todos los rincones del mundo, proporcionando una experiencia de aprendizaje interactiva y accesible para todos.</p>
        </section>
    </main>
</body>
</html>
