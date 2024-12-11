<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - {{ $narrative->name }}</title>
    <!-- Enlazar el archivo CSS externo -->
    <link rel="stylesheet" href="{{ asset('css styles/leyendas.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="Actividades">Actividades</a>
            <a href="/progreso">Progreso</a>
        </nav>
        <a href="#" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <section class="content">
            <h1>{{ $narrative->name }}</h1>
            <img src="{{ asset($narrative->image) }}" alt="Imagen de {{ $narrative->name }}">
            <p>{{ $narrative->content->text }}</p>
            @if($narrative->content->video_url)
                <iframe width="560" height="315" src="{{ $narrative->content->video_url }}" 
                        title="{{ $narrative->name }}" 
                        frameborder="0" allowfullscreen>
                </iframe>
            @endif
        </section>
    </main>
</body>
</html>
