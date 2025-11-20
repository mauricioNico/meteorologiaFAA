

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="shortcut icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="apple-touch-icon" href="../../public/images/logoM.png">
    <title>Meteorología FAA</title>

    <style>
        /* Estilos generales */
        body.bodya {
            background-color: #f7fafc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            height: 60px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #00246b;
            color: white;
            z-index: 50;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container-a {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar a, .navbar span {
            font-weight: bold;
            font-size: 1.125rem;
            color: white;
            text-decoration: none;
        }

        .navbar a:hover, .navbar span:hover { color: #d1d5db; }

        /* FOOTER */
        footer {
            height: 30px;
            background-color: #00246b;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 2;
        }
        footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* TARJETA - MENU CENTRAL */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 80px 0 60px; /* espacio para header/footer */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .card {
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #00246b;
        }

        .meno {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .meno-item {
            display: block;
            padding: 12px;
            border-radius: 8px;
            color: #fff;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: bold;
            background-color: #00246b;
            transition: transform 0.25s ease, background-color 0.25s ease;
        }

        .meno-item:hover {
            transform: scale(1.05);
            background-color: #001a4e;
        }

        /* BOTÓN AMARILLO DESTACADO */
        .meno-item.primero {
            background-color: #f0c400; /* amarillo */
            color: #000;
            border: 2px solid #b48e00;
            font-size: 1.2em;
            padding: 14px;
        }

        .meno-item.primero:hover {
            background-color: #c9a300;
            transform: scale(1.08);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .card {
                padding: 18px;
            }
            .meno-item {
                font-size: 1em;
            }
            .meno-item.primero {
                font-size: 1.05em;
            }
        }
    </style>
</head>

<body class="bodya">
    <!-- Header -->
    <nav class="navbar">
        <div class="container-a">
            <a href="index.php">Meteorología FAA</a>
            <div class="menu" id="menu">
                <a href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- TARJETA MENÚ PRINCIPAL -->
    <div class="card">
        <img src="img/logoM.png" alt="Logo Meteorología FAA" 
             style="max-width:320px;width:100%;height:auto;display:block;margin:0 auto 20px auto;">

        <h2>Menú Principal</h2>

        <div class="meno">

            <!-- PRIMER BOTÓN AMARILLO -->
            <a href="https://imagenesmeteorologicas.faa.mil.ar/app/model/main.php" class="meno-item primero">Subir Información</a>

            <!-- BOTONES SIN ICONOS -->
            <a href="briefing.php" class="meno-item">Briefing Meteorológico</a>
            <a href="https://imagenesmeteorologicas.faa.mil.ar/app/model/abmUsuarios.php" class="meno-item">Lista de Usuarios</a>
            <a href="https://imagenesmeteorologicas.faa.mil.ar/app/model/abmAerodromos.php" class="meno-item">Altas y Bajas de Aeródromos</a>
            <a href="apoyo.php" class="meno-item">Información de Apoyo</a>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo" 
             style="height:22px;vertical-align:middle;margin-right:8px;">
        <p>&copy; 2025 Imágenes Meteorológicas - Dirección de Informática</p>
    </footer>
</body>
</html>
