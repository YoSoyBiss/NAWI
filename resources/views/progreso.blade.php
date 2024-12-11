<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso - Nawi</title>
    <link rel="stylesheet" href="{{ asset('css styles/home.css') }}">
    <style>
        /* Barra de progreso */
        .progress-bar-container {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            height: 20px;
            margin-bottom: 10px;
        }

        .progress-bar {
            height: 100%;
            background-color: #4caf50;
            text-align: center;
            color: white;
            line-height: 20px;
            border-radius: 10px;
        }

        .progress-item {
            margin-bottom: 20px;
        }

        .progress-item h3 {
            margin: 0;
        }

        .progress-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
        <a href="/cuentos">Cuentos</a>
            <a href="Actividades">Actividades</a>
            <a href="/progreso">Progreso</a>
        </nav>
        <a href="/login" class="logout">Cerrar Sesión</a>
    </header>

    <main>
        <section class="left-section">
            <h1>Progreso de Actividades</h1>
            <p>Aquí puedes ver el progreso de las actividades que has completado.</p>
        </section>

        <section class="right-section">
            <h2>Tu progreso</h2>

            @foreach($progressData as $data)
    <div class="exercise">
        <h3>{{ $data['exercise']->name }}</h3>
        <p>{{ $data['exercise']->description }}</p>

        <!-- Barra de progreso -->
        <div class="progress-bar-container">
            <div class="progress-bar" style="width: {{ $data['progressPercentage'] }}%">
                {{ round($data['progressPercentage']) }}%
            </div>
        </div>
    </div>
@endforeach



        </section>
    </main>
</body>
</html>
