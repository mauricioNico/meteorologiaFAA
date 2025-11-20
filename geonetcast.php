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
            padding: 80px 0 60px; 
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
            gap: 8px 40px;
            max-width: 900px;
            margin: 0 auto 28px auto;
        }

        /* BOTONES – BASE */
        .geo-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 8px 12px;
            color: #ffffff;
            border-radius: 0;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.02em;
            border: 1px solid transparent;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            transition: background-color 0.15s ease, transform 0.15s ease, box-shadow 0.15s ease;
        }

        /* TONO AZUL OSCURO */
        .geo-btn-dark {
            background-color: #002060;
            border-color: #002060;
        }
        .geo-btn-dark:hover {
            background-color: #002c6c;
        }

        /* TONO AZUL MEDIO */
        .geo-btn-mid {
            background-color: #002D86;
            border-color: #002D86;
        }
        .geo-btn-mid:hover {
            background-color: #395f99;
        }

/* TONO BANDA AZUL */
        .geo-btn-blue {
            background-color: #003FBC;
            border-color: #003FBC;
        }
.geo-btn-mid:hover {
            background-color: #123c7aff;
        }



        /* TONO AZUL CLARO */
        .geo-btn-light {
            background-color: #9cb5f5;
            border-color: #7b94c5;
        }
        .geo-btn-light:hover {
            background-color: #7b94c5;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .buttons-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }
        }
        a{ color: inherit; text-decoration: none; }
        a:hover{ text-decoration: underline; }
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
            por Servicio de Meteorología del Esc I VYCA.
        </p>

        <!-- BOTONES EN DOS COLUMNAS -->
        <section aria-label="Productos satelitales">
     <!-- BOTONES EN TABLA (2 COLUMNAS, ALTURAS IGUALES, RESPONSIVE) -->
<style>
    /* Asegura que todos los botones tengan la misma altura en una fila */
    .tabla-btn td {
        vertical-align: top;
    }
    .tabla-btn a {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 38px;  /* altura uniforme */
        margin-bottom: 6px;
    }

    /* En móvil: una sola columna */
    @media(max-width: 768px){
        .tabla-btn tr, .tabla-btn td {
            display: block;
            width: 100%;
            padding: 0 !important;
        }
    }
</style>

<table class="tabla-btn" style="width:100%; max-width:900px; margin:0 auto 28px auto; border-collapse:collapse;">
    <tr>
        <!-- COLUMNA IZQUIERDA -->
        <td style="width:50%; padding-right:20px;">

            <a href="#" class="geo-btn geo-btn-dark">Argentina – Color Natural</a>
            <a href="#" class="geo-btn geo-btn-dark">Argentina Infrarrojo – Topes Nubosos</a>
            <a href="#" class="geo-btn geo-btn-dark">Argentina Infrarrojo Cercano</a>

            <a href="#" class="geo-btn geo-btn-mid">Argentina Visible – Banda Azul</a>
            <a href="#" class="geo-btn geo-btn-mid">Argentina Visible – Banda Rojo</a>
            <a href="#" class="geo-btn geo-btn-mid">Argentina Vapor de Agua – 750 a 500 hPa</a>

        </td>

        <!-- COLUMNA DERECHA -->
        <td style="width:50%; padding-left:20px;">

            <a href="#" class="geo-btn geo-btn-blue">Antártida – Color Natural</a>
            <a href="#" class="geo-btn geo-btn-blue">Antártida – Topes Nubosos</a>
            <a href="#" class="geo-btn geo-btn-blue">Antártida Visible – Banda Azul</a>

            <a href="#" class="geo-btn geo-btn-light">Argentina Rayos</a>
            <a href="#" class="geo-btn geo-btn-light">Argentina – Fase de Agua en Nube (estimada)</a>
            <a href="#" class="geo-btn geo-btn-light">Argentina – Altura de Topes (estimada)</a>
            <a href="#" class="geo-btn geo-btn-light">Sudamérica – Incendios</a>

        </td>
    </tr>
</table>

        </section>

        <!-- Links de Apoyo -->
        <h3 class="links-apoyo-titulo">Links de Apoyo</h3>
        <div class="links-apoyo-lista">
            <a href="https://www.geonetcastamericas.noaa.gov/" target="_blank" rel="noopener noreferrer">
                https://www.geonetcastamericas.noaa.gov/
            </a><br>
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
