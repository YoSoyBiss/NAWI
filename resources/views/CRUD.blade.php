<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Historias y Actividades</title>
    <link rel="stylesheet" href="{{ asset('css/styles/CRUD.css') }}">
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

    <main class="container">
        <h1>Gestión de Historias y Actividades</h1>

        <!-- Crear nueva historia -->
        <section>
            <h2>Crear Nueva Historia</h2>
            <form action="{{ route('narratives.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Nombre de la historia" required>
                <textarea name="description" placeholder="Descripción"></textarea>
                <input type="file" name="image" required>
                <button type="submit">Guardar</button>
            </form>
        </section>

        <!-- Listado de historias -->
        <section>
            <h2>Historias</h2>
            @if($narratives->isEmpty())
                <p>No se encontraron historias.</p>
            @else
                <div class="leyendas-container">
                    @foreach($narratives as $narrative)
                    <div class="leyenda-card">
                        <h3>{{ $narrative->name }}</h3>
                        <p>{{ $narrative->description }}</p>
                        <img src="{{ asset($narrative->image) }}" alt="{{ $narrative->name }}" width="150">
                        <div>
                            <a href="{{ route('narratives.edit', $narrative->id) }}">Editar</a>
                            <form action="{{ route('narratives.destroy', $narrative->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </div>

                        <!-- Contenidos -->
                        @if($narrative->contents)
                            <h4>Contenido</h4>
                            <p>{{ $narrative->contents->text }}</p>
                            <a href="{{ $narrative->contents->video_url }}">Ver Video</a>
                        @endif

                        <!-- Ejercicios -->
                        <h4>Actividades</h4>
                        <ul>
                            @foreach($narrative->exercises as $exercise)
                                <li>{{ $exercise->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            @endif
        </section>
    </main>

    <script>
        // Función para buscar historias
        function searchHistorias() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const cards = document.querySelectorAll(".leyenda-card");

            cards.forEach(card => {
                const title = card.querySelector("h3").textContent.toLowerCase();
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
