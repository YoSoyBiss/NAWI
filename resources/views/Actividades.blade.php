<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - Nawi</title>
    <link rel="stylesheet" href="{{ asset('css styles/Actividades.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="/ejercicios">Ejercicios</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="#" class="logout">Cerrar Sesión</a>
    </header>

    <main>
        <section class="search-bar">
            <input type="text" placeholder="Buscar actividad..." id="searchInput">
            <button>Buscar</button>
        </section>

        <section class="leyendas-container">
            @foreach($exercises as $exercise)
                <div class="leyenda-card">
                    <a href="{{ route('exercises.show', $exercise->id) }}">
                        <img src="{{ asset('images/default-image.jpg') }}" alt="Imagen de actividad"> <!-- Puedes cambiar la imagen por la asociada al ejercicio -->
                        <h2>{{ $exercise->title }}</h2>
                        <p>{{ Str::limit($exercise->description, 100) }}</p>
                    </a>
                </div>
            @endforeach
        </section>
    </main>
</body>
</html>
