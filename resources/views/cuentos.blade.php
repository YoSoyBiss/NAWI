<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Leyendas</title>
    <link rel="stylesheet" href="{{ asset('css styles/cuentos.css') }}">
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
