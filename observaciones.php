<?php
// observaciones.php - Observaciones Militares
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="shortcut icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="apple-touch-icon" href="../../public/images/logoM.png">
    <title>Observaciones Militares - Meteorología FAA</title>

    <style>
        .bodya {
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
        }
        .container-a {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .navbar a {
            font-weight: bold;
            font-size: 1.125rem;
            color: white;
            text-decoration: none;
        }
        .navbar a:hover { color: #d1d5db; }

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

        /* CONTENIDO CENTRAL */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 80px 0 60px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background: #f5f5f5;
            min-height: 100vh;
        }

        .main-container {
            margin:auto;
            max-width: 900px;
            text-align: center;
            padding: 24px 16px;
        }

        h1 {
            font-size: 2rem;
            color: #00246b;
            margin-bottom: 18px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .descripcion {
            max-width: 800px;
            margin: 0 auto 30px auto;
            font-size: 1rem;
            line-height: 1.55;
            text-align: justify;
            color: #444;
        }

        /* Botón grande */
        .btn-datos {
            display: block;
            width: 380px;
            max-width: 95%;
            margin: 0 auto 40px auto;
            padding: 30px 10px;
            background-color: #0a4868;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            border: 2px solid #03344c;
            text-decoration: none;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }
        .btn-datos:hover {
            background-color: #06364f;
            transform: scale(1.03);
        }

        .links-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #00246b;
            margin-bottom: 10px;
        }

        .links-apoyo a {
            display: block;
            color: #003c94;
            text-decoration: underline;
            margin-bottom: 6px;
            word-break: break-all;
            font-size: 0.95rem;
        }

        @media (max-width: 600px) {
            .btn-datos {
                padding: 22px 10px;
            }
        }
    </style>
</head>

<body class="bodya">

    <!-- HEADER -->
    <nav class="navbar">
        <div class="container-a">
            <a href="menu.php">Meteorología FAA</a>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="main-container">
        <h1>Observaciones Militares</h1>

        <p class="descripcion">
            Las Observaciones Militares son realizadas por personal de la FAA para uso exclusivo dentro
            de su ámbito y resultan complementarias –no vinculantes– de las observaciones oficiales
            realizadas por el SMN.
        </p>

        <a href="#" class="btn-datos">DATOS</a>

        <div class="links-title">Links de Apoyo</div>

        <div class="links-apoyo">
            <a href="https://www.smn.gob.ar/meteorologia-aeronautica" target="_blank">
                https://www.smn.gob.ar/meteorologia-aeronautica
            </a>
            <a href="http://" target="_blank">http://</a>
            <a href="http://" target="_blank">http://</a>
            <a href="#">...</a>
        </div>
    </main>
    <!-- FOOTER -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo"
             style="height:22px;vertical-align:middle;margin-right:8px;">
        <p>&copy; 2025 Imágenes Meteorologicas - Dirección de Informática</p>
    </footer>

</body>
</html>
