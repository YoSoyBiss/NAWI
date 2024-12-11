<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $exercise->title }} - Cuestionario</title>
    <link rel="stylesheet" href="{{ asset('css styles/crud.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="/Actividades">Actividades</a>
            <a href="/progreso">Progreso</a>
        </nav>
        <a href="/login" class="logout">Cerrar Sesión</a>
    </header>

    <main>
        <div class="container">
            <h1>{{ $exercise->title }}</h1>
            <p>{{ $exercise->description }}</p>

            <form action="{{ route('exercises.submit', $exercise->id) }}" method="POST">
                @csrf

                @foreach($exercise->questions as $index => $question)
                    <div class="question">
                        <label>{{ $question['question'] }}</label>
                        
                        @foreach($question['options'] as $option)
                            <label>
                            <input type="radio" name="questions[{{ $index }}]" value="{{ $option }}" required>

                                {{ $option }}
                            </label>
                        @endforeach
                    </div>
                @endforeach

                <button type="submit">Enviar respuestas</button>
            </form>
        </div>
    </main>
</body>
</html>
