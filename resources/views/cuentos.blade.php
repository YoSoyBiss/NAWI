<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Leyendas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fffacd; /* Color de fondo de la página */
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
            justify-content: center;
            padding: 40px;
            flex-wrap: wrap; /* Permite que los cuadros de leyendas se ajusten y envuelvan */
            gap: 20px; /* Espacio entre los cuadros de leyendas */
        }

        .leyenda-card {
            background-color: #f0f3ff; /* Fondo de cada leyenda */
            padding: 20px;
            width: 300px; /* Ancho de cada cuadro de leyenda */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .leyenda-card img {
            width: 100%;
            border-radius: 8px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .leyenda-card h2 {
            font-size: 1.5rem;
            color: #62959a;
            margin-bottom: 10px;
        }

        .leyenda-card p {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
    <a href="/home"><img src="images/logo.png" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="#">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="login" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <!-- Cada .leyenda-card representa una leyenda con su imagen y descripción -->
        <a href="/leyendas"><div class="leyenda-card">
            <img src="images/miaz.jpg" >
            <h2>La leyenda del Maiz</h2>
            <p>Conoce la historia del nopal, un símbolo de la cultura mexicana y su conexión con la fundación de Tenochtitlán.</p>
        </div></a>
        
        <div class="leyenda-card">
            <img src="images/luna.png" alt="La leyenda de la Luna">
            <h2>La leyenda de la Luna</h2>
            <p>Descubre el relato de cómo la Luna llegó a ser la fiel compañera del sol en las noches estrelladas de México.</p>
        </div>
        
        <div class="leyenda-card">
            <img src="images/pi.jpg" alt="La leyenda de Popocatépetl e Iztaccíhuatl">
            <h2>Popocatépetl e Iztaccíhuatl</h2>
            <p>Una trágica historia de amor que dio origen a dos de los volcanes más icónicos de México.</p>
        </div>
        
        <!-- Agregar más leyendas aquí según sea necesario -->
    </main>
</body>
</html>
