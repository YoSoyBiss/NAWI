<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAWI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2c3e50;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        main {
            padding: 20px;
        }

        #bienvenida {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e74c3c;
            color: white;
            padding: 50px 20px;
        }

        #bienvenida img {
            width: 45%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #bienvenida div {
            width: 50%;
            padding-left: 20px;
        }

        #galeria {
            margin-top: 30px;
            text-align: center;
        }

        #galeria .imagenes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        #galeria .imagenes img {
            width: 200px;
            height: 150px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#historias">Historias</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="bienvenida">
            <img src="imagen_bienvenida.jpg" alt="Imagen de bienvenida">
            <div>
                <h1>Bienvenido a NAWI</h1>
                <p>Explora las fascinantes historias y leyendas que forman parte de la rica herencia cultural de México.</p>
            </div>
        </section>

        <section id="galeria">
            <h2>Galería de Imágenes</h2>
            <div class="imagenes">
                <img src="imagen1.jpg" alt="Imagen 1">
                <img src="imagen2.jpg" alt="Imagen 2">
                <img src="imagen3.jpg" alt="Imagen 3">
                <img src="imagen4.jpg" alt="Imagen 4">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Historias de la Cultura Mexicana. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
