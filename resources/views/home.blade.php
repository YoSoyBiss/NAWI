<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home de NAWI</title>
    <link rel="stylesheet" href="{{ asset('css styles/home.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#historias">Historias</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <div class="perfil">
            <a href="#perfil">
                <img src="{{ asset('images/perfil.jpg') }}" alt="Perfil">
            </a>
        </div>
    </header>

    <main>
        <section id="bienvenida">
            <img src="{{ asset('images/imagen_bienvenida.jpg') }}" alt="Imagen de bienvenida">
            <div>
                <h1>Bienvenido a NAWI</h1>
                <p>Explora las fascinantes historias y leyendas que forman parte de la rica herencia cultural de México.</p>
            </div>
        </section>

        <section id="galeria">
            <h2>Galería de Imágenes</h2>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Buscar leyenda...">
                <button onclick="filterImages()">Buscar</button>
            </div>
            <div class="imagenes" id="imagenesGaleria">
                <img src="{{ asset('images/imagen1.jpg') }}" alt="Leyenda 1" data-title="Leyenda Azteca">
                <img src="{{ asset('images/imagen2.jpg') }}" alt="Leyenda 2" data-title="Leyenda Maya">
                <img src="{{ asset('images/imagen3.jpg') }}" alt="Leyenda 3" data-title="Leyenda Olmeca">
                <img src="{{ asset('images/imagen4.jpg') }}" alt="Leyenda 4" data-title="Leyenda Tolteca">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 NAWI. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/filter.js') }}"></script>
</body>
</html>
