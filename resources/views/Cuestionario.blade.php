<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Actividad de la Leyenda del Maíz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fffacd; /* Color de fondo de la pagina */
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

        main {
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .activity-container {
            background-color: #f0f3ff; /* Fondo de la seccion */
            padding: 40px;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .activity-container h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .question {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #333;
        }

        .question label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        .activity-container input[type="radio"] {
            margin-right: 10px;
        }

        .check-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #bdfcc9; /* Color del boton */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/Cuentos">Cuentos</a>
            <a href="/Actividades">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="#" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <section class="activity-container">
            <h2>Actividad<br>“La leyenda Del Maíz”</h2>

            <div class="question">
                <p><strong>Pregunta 1:</strong><br>¿Qué elemento natural jugó un papel crucial en el descubrimiento del maíz según la leyenda?</p>
                <label><input type="radio" name="question1"> El sol</label>
                <label><input type="radio" name="question1"> El viento</label>
                <label><input type="radio" name="question1"> La lluvia</label>
                <label><input type="radio" name="question1"> El fuego</label>
            </div>

            <div class="question">
                <p><strong>Pregunta 2:</strong><br>¿Quiénes eran los encargados de buscar el maíz en la leyenda?</p>
                <label><input type="radio" name="question2"> Los dioses</label>
                <label><input type="radio" name="question2"> Los guerreros</label>
                <label><input type="radio" name="question2"> Los animales</label>
                <label><input type="radio" name="question2"> Los ancianos de la tribu</label>
            </div>

            <button class="check-button">Check</button>
        </section>
    </main>
</body>
</html>