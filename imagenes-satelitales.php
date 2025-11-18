<?php
// imagenes-satelitales.php - Vista de imágenes satelitales
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="shortcut icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="apple-touch-icon" href="../../public/images/logoM.png">
    <title>Imágenes Satelitales - Meteorología FAA</title>
    <link rel="stylesheet" href="bitnami.css">
    <style>
        .bodya {
            background-color: #f7fafc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
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
        #menu-button { display: none; color: #d1d5db; background: none; border: none; cursor: pointer; outline: none; }
        .menu { display: flex; gap: 1rem; }
        @media (max-width: 1024px) { #menu-button{ display:block; } .menu{ display:none; } }

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
        p { margin: 0; padding: 0; }
        .card-body p { margin: 10px 0; font-size: 1rem; color: #333; }
        footer p { margin: 10px 0; font-size: 1rem; color: white; }

        /* Estilos del contenido (tarjeta con menú) */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 80px 0 60px;
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
            max-width: 600px;
            width: 100%;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin: 0 15px;
        }
        .card h2 { font-size: 2em; margin-bottom: 20px; color: #00246b; }
        .meno { display: grid; grid-template-columns: 1fr; gap: 12px; }
        .meno-item {
            display: block; padding: 12px 14px; border-radius: 8px; color: #fff; text-decoration: none; font-size: 1.05em; font-weight: bold; background-color: #00246b; transition: transform 0.18s ease, background-color 0.18s ease;
        }
        .meno-item:hover { transform: translateY(-2px); background-color: #001a4e; }
        .back-link {
            display: inline-block; margin-top: 20px; padding: 8px 16px; background-color: #6c757d; color: #fff; text-decoration: none; border-radius: 6px; font-weight: bold; transition: background-color 0.2s ease;
        }
        .back-link:hover { background-color: #5a6268; }
        
        /* Responsive */
        @media (max-width: 768px) {
            .card {
                margin: 0 10px;
                padding: 20px;
            }
            .card h2 { font-size: 1.6em; margin-bottom: 15px; }
            .meno-item { font-size: 1em; padding: 10px 12px; }
            .back-link { padding: 7px 14px; font-size: 0.95em; margin-top: 15px; }
        }
        
        @media (max-width: 480px) {
            .card {
                margin: 0 8px;
                padding: 15px;
            }
            .card h2 { font-size: 1.4em; margin-bottom: 12px; }
            .meno-item { font-size: 0.95em; padding: 9px 10px; }
            .back-link { padding: 6px 12px; font-size: 0.9em; }
            body { padding: 70px 0 50px; }
        }
    </style>
</head>
<body class="bodya">
    <!-- Header -->
    <nav class="navbar">
        <div class="container-a">
            <a class="ab" href="menu.php">Meteorología FAA</a>
            <div class="menu" id="menu">
                <a class="ab" href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="card module_content">
        <img src="img/logoM.png" alt="Logo Meteorología FAA" style="max-width:280px;width:100%;height:auto;display:block;margin:0 auto 16px auto;">
        <h2>Imágenes Satelitales</h2>
        <div class="meno" role="navigation" aria-label="Menú imágenes satelitales">
            <a href="geonetcast.php" class="meno-item">Receptor Fuerza Aérea Argentina</a>
            <a href="#" class="meno-item">Otras imágenes</a>
        </div>
        <!--a href="briefing.php" class="back-link">← Volver al Briefing</a-->
    </div>

    <!-- Footer -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo" style="height:22px;vertical-align:middle;margin-right:8px;">
        <p style="display:inline-block;vertical-align:middle;margin:0;">&copy; 2025 Imágenes Meteorologicas - Dirección de Informática</p>
    </footer>
</body>
</html>
