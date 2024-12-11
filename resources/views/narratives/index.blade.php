<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Narratives</title>

    <link rel="stylesheet" href="{{ asset('css styles/CRUD.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="/Actividades">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="/login" class="logout">Cerrar Sesión</a>
    </header>

    <main>
        <div class="container">
            <h1>Narratives</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('narratives.create') }}" class="btn btn-primary mb-3">Add New Narrative</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($narratives as $narrative)
                        <tr>
                            <td>{{ $narrative->name }}</td>
                            <td>{{ $narrative->description }}</td>
                            <td>
                                <a href="{{ route('narratives.edit', $narrative->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('narratives.destroy', $narrative->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
