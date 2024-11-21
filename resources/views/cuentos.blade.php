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
            background-color: #fffacd;
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

        .search-bar {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 10px;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .search-bar button {
            padding: 8px 12px;
            background-color: #62959a;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            gap: 20px;
        }

        .leyendas-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .leyenda-card {
            background-color: #f0f3ff;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer; /* Indicar que es interactivo */
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .leyenda-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para las tarjetas seleccionadas */
        .leyenda-card.selected {
            border: 2px solid #62959a;
            box-shadow: 0 4px 12px rgba(98, 149, 154, 0.5);
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
        <!-- Barra de búsqueda dentro de main -->
        <form class="search-bar" onsubmit="return searchLeyendas()">
            <input type="text" id="searchInput" placeholder="Buscar leyenda...">
            <button type="submit">Buscar</button>
        </form>

        <div class="leyendas-container" id="leyendas">
            <div class="leyenda-card">
                <img src="images/miaz.jpg" alt="La leyenda del Maiz">
                <h2>La leyenda del Maiz</h2>
                <p>Conoce la historia del maíz, un símbolo de la cultura mexicana.</p>
            </div>
            
            <div class="leyenda-card">
                <img src="images/luna.png" alt="La leyenda de la Luna">
                <h2>La leyenda de la Luna</h2>
                <p>Descubre el relato de cómo la Luna llegó a ser la compañera del sol.</p>
            </div>
            
            <div class="leyenda-card">
                <img src="images/pi.jpg" alt="Popocatépetl e Iztaccíhuatl">
                <h2>Popocatépetl e Iztaccíhuatl</h2>
                <p>Una trágica historia de amor que dio origen a dos de los volcanes más icónicos de México.</p>
            </div>
        </div>
    </main>

    <script>
        // Función para buscar leyendas
        function searchLeyendas() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const cards = document.querySelectorAll(".leyenda-card");

            cards.forEach(card => {
                const title = card.querySelector("h2").textContent.toLowerCase();
                if (title.includes(input)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
            
            return false; // Evitar recargar la página
        }

        // Función para seleccionar tarjetas
        document.querySelectorAll(".leyenda-card").forEach(card => {
            card.addEventListener("click", () => {
                card.classList.toggle("selected");
            });
        });
    </script>
</body>
</html>
