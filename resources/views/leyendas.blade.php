<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Leyenda del Maíz</title>
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

        .content {
            background-color: #f0f3ff; /* Fondo de la seccion */
            padding: 40px;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.5;
            text-align: justify;
            margin-bottom: 20px;
        }

        .content img {
            width: 300px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
    <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="#">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="#" class="logout">Cerrar Sesión</a>
    </header>
    
    <main>
        <section class="content">
            <h1>La leyenda del maíz</h1>
            <img src="{{ asset('images/miaz.jpg') }}" alt="Imagen de la leyenda del maíz">
            <p>
                Cuenta la leyenda que muchos siglos atrás, antes de la existencia del dios Quetzalcóatl, el pueblo azteca solo se alimentaba de raíces y animales.

Sin embargo, detrás de las enormes montañas vecinas, yacía un tesoro imposible de alcanzar; ese tesoro era el maíz. Otros dioses intentaron sin triunfo dividir las montañas para que los hombres pudieran atravesarlas.

Fue entonces que apareció Quetzalcóatl.

Quetzalcóatl prometió a los aztecas que les entregaría el preciado maíz, pero no mediante el uso de la fuerza, sino de la inteligencia. Fue así como se transformó en una hormiga negra y acompañado de una hormiga roja que conocía el camino, se marchó hacia las montañas.

En el recorrido encontró innumerables obstáculos, pero estos no lo detuvieron. Él mantuvo en sus pensamientos las necesidades del pueblo azteca, y siguió avanzando.

Pasaron muchos días antes de que Quetzalcóatl llegara a cima de la montaña y encontrara el maíz. Tomó un grano entre sus mandíbulas y emprendió el camino de regreso. Al llegar, les entregó a los aztecas el grano de maíz prometido.

Desde ese día, el pueblo azteca prosperó bajo el cultivo y cosecha del maíz. Se hicieron poderosos, llenos de riquezas y construyeron las más imponentes ciudades, palacios y templos.

Y por esto, veneraron con fervor a Quetzalcóatl; el dios que les trajo el maíz.
            </p>
        </section>
    </main>
</body>
</html>
