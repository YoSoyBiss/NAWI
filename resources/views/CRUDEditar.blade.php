<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Historia</title>
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
        <h1>Editar Historia</h1>
        <form action="{{ route('narratives.update', $narrative->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $narrative->name }}" required>
            <textarea name="description">{{ $narrative->description }}</textarea>
            <input type="file" name="image">
            <button type="submit">Actualizar</button>
        </form>
    </main>
</body>
</html>
