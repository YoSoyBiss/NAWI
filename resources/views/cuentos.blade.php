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
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/Cuentos">Cuentos</a>
            <a href="/Actividades">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="login" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <!-- Barra de búsqueda -->
        <form class="search-bar" onsubmit="return searchLeyendas()">
            <input type="text" id="searchInput" placeholder="Buscar leyenda...">
            <button type="submit">Buscar</button>
        </form>

        <!-- Contenedor de leyendas -->
        <div class="leyendas-container" id="leyendas">
            @if($narratives->isEmpty())
                <p>No se encontraron leyendas.</p>
            @else
                @foreach($narratives as $narrative)
                <div class="leyenda-card">
    <a href="{{ route('narratives.show', $narrative->id) }}">
        <img src="{{ asset($narrative->image) }}" alt="{{ $narrative->name }}">
        <h2>{{ $narrative->name }}</h2>
        <p>{{ $narrative->description }}</p>
    </a>
</div>
                @endforeach
            @endif
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
    </script>
</body>
</html>
