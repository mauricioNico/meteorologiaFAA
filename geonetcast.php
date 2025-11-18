<?php
// geonet.php - Receptor GeoNetCast con botones Argentina / Antártida
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="shortcut icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="apple-touch-icon" href="../../public/images/logoM.png">
    <title>Receptor GeoNetCast - Meteorología FAA</title>

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
        .navbar a {
            font-weight: bold;
            font-size: 1.125rem;
            color: white;
            text-decoration: none;
        }
        .navbar a:hover {
            color: #d1d5db;
        }

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

        /* CONTENIDO */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 80px 0 60px; /* espacio para header y footer */
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            color: #333;
        }

        .main-container {
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
            padding: 24px 16px 40px;
        }

        .titulo-geonet {
            text-align: center;
            font-size: 1.9rem;
            font-weight: 700;
            color: #00246b;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .descripcion-geonet {
            max-width: 900px;
            margin: 0 auto 24px auto;
            font-size: 0.98rem;
            line-height: 1.5;
            text-align: center;
        }

        .descripcion-geonet a {
            color: #0056b3;
            text-decoration: underline;
        }

        /* GRID DE BOTONES */
        .buttons-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 40px; /* filas, columnas */
            max-width: 900px;
            margin: 0 auto 28px auto;
        }

        .geo-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 8px 12px;
            background-color: #003c94;
            color: #ffffff;
            border-radius: 0;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.02em;
            border: 1px solid #002c6c;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            transition: background-color 0.15s ease, transform 0.15s ease, box-shadow 0.15s ease;
        }

        .geo-btn:hover {
            background-color: #002c6c;
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        /* LINKS DE APOYO */
        .links-apoyo-titulo {
            text-align: center;
            font-weight: 700;
            color: #00246b;
            margin-bottom: 8px;
        }

        .links-apoyo-lista {
            text-align: left;
            max-width: 900px;
            margin: 0 auto;
            font-size: 0.95rem;
        }

        .links-apoyo-lista a {
            display: block;
            color: #003c94;
            text-decoration: underline;
            margin-bottom: 4px;
            word-break: break-all;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .buttons-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }
        }
    </style>
</head>
<body class="bodya">

    <!-- Header -->
    <nav class="navbar">
        <div class="container-a">
            <a href="menu.php">Meteorología FAA</a>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="main-container">
        <h1 class="titulo-geonet">Receptor Fuerza Aérea Argentina</h1>

        <p class="descripcion-geonet">
            El receptor de imágenes satelitales meteorológicas de la FAA integra la red de receptores del
            sistema <a href="https://www.geonetcastamericas.noaa.gov/" target="_blank" rel="noopener noreferrer">GeoNetCast Américas (OMM-NOAA)</a>,
            ha sido desarrollado en la V Brigada Aérea y actualmente es operado en la BAM Merlo
            por Servicio de Meteorología del Esc&nbsp;|&nbsp;VYCA.
        </p>

        <!-- BOTONES EN DOS COLUMNAS -->
        <section class="buttons-grid" aria-label="Productos satelitales">
            <!-- Columna izquierda: Argentina -->
            <a href="#" class="geo-btn">Argentina – Color Natural</a>
            <a href="#" class="geo-btn">Antártida – Color Natural</a>

            <a href="#" class="geo-btn">Argentina Infrarrojo – Topes Nubosos</a>
            <a href="#" class="geo-btn">Antártida – Topes Nubosos</a>

            <a href="#" class="geo-btn">Argentina Infrarrojo Cercano</a>
            <a href="#" class="geo-btn">Antártida Visible – Banda Azul</a>

            <a href="#" class="geo-btn">Argentina Visible – Banda Rojo</a>
            <a href="#" class="geo-btn">Argentina Rayos – Banda Rojo</a>

            <a href="#" class="geo-btn">Argentina Visible – Banda Azul</a>
            <a href="#" class="geo-btn">Argentina – Fase de Agua en Nube (estimada)</a>

            <a href="#" class="geo-btn">Argentina Vapor de Agua – 750 a 500 hPa</a>
            <a href="#" class="geo-btn">Argentina – Altura de Topes (estimada)</a>
        </section>

        <!-- Links de Apoyo -->
        <h3 class="links-apoyo-titulo">Links de Apoyo</h3>
        <div class="links-apoyo-lista">
            <a href="https://www.geonetcastamericas.noaa.gov/" target="_blank" rel="noopener noreferrer">
                https://www.geonetcastamericas.noaa.gov/
            </a>
            <a href="https://geonetcast.wordpress.com/" target="_blank" rel="noopener noreferrer">
                https://geonetcast.wordpress.com/
            </a>
        </div>
    </main>
 
    <!-- Footer -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo"
             style="height:22px;vertical-align:middle;margin-right:8px;">
        <p>&copy; 2025 Imágenes Meteorologicas - Dirección de Informática</p>
    </footer>

</body>
</html>
