<?php
// briefing.php - Briefing meteorológico con estilo similar a la imagen
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="shortcut icon" type="image/png" href="../../public/images/logoM.png">
    <link rel="apple-touch-icon" href="../../public/images/logoM.png">
    <title>Briefing - Meteorología FAA</title>
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
        .navbar a, .navbar span {
            font-weight: bold;
            font-size: 1.125rem;
            color: white;
            text-decoration: none;
        }
        .navbar a:hover, .navbar span:hover {
            color: #d1d5db;
        }
        #menu-button { display: none; color: #d1d5db; background: none; border: none; cursor: pointer; outline: none; }
        .menu { display: flex; gap: 1rem; }
        @media (max-width: 1024px) {
            #menu-button { display:block; }
            .menu { display:none; }
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

        /* CONTENIDO CENTRAL */
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
            padding: 24px 32px 32px;
            border-radius: 6px;
            max-width: 700px;
            width: 100%;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin: 0 15px;
        }
        .card img {
            display: block;
            margin: 0 auto 12px auto;
        }
        .card h2 {
            font-size: 1.6em;
            margin-bottom: 18px;
            color: #00246b;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* MENÚ VERTICAL */
        .meno {
            display: grid;
            grid-template-columns: 1fr;
            gap: 6px;
        }
        .meno-item {
            display: block;
            padding: 10px 14px;
            border-radius: 4px;
            color: #ffffff;
            text-decoration: none;
            font-size: 0.95em;
            font-weight: 600;
            text-align: center;
            border: 1px solid transparent;
            transition: transform 0.15s ease, box-shadow 0.15s ease, opacity 0.15s ease;
        }
        .meno-item:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.15);
            opacity: 0.95;
        }

        /* COLORES SEGÚN LA IMAGEN */
        .btn-alerta {
            background-color: #ff0000;
            border-color: #b00000;
        }
       /* COLORES – NUEVOS DEGRADÉS SUAVES */
.btn-alerta {
    background-color: #ff0000;
    border-color: #b00000;
}
/* COLORES – DEGRADÉS AJUSTADOS CON BUEN CONTRASTE */
.btn-alerta {
    background-color: #ff0000;
    border-color: #b00000;
}

/* Azul oscuro – Excelente contraste con blanco */
.btn-azul-oscuro {
    background: linear-gradient(to right, #00214e, #003a7a);
    border-color: #001732;
}

/* Azul medio – Más saturado y profundo */
.btn-azul {
    background: linear-gradient(to right, #0057c2, #0074ff);
    border-color: #00459b;
}

/* Espacio – Celeste más oscuro para buena lectura */
.btn-espacio {
    background: linear-gradient(to right, #4f8fd8, #77b5ff);
    border-color: #3a6ea5;
}

/* Apoyo – Celeste grisado más profundo */
.btn-apoyo {
    background: linear-gradient(to right, #4aa6c8, #71c7e6);
    border-color: #337d96;
}


        /* Responsive */
        @media (max-width: 768px) {
            .card {
                margin: 0 10px;
                padding: 20px;
            }
            .card h2 {
                font-size: 1.4em;
                margin-bottom: 14px;
            }
            .meno-item {
                font-size: 0.9em;
                padding: 9px 10px;
            }
        }
        @media (max-width: 480px) {
            .card {
                margin: 0 8px;
                padding: 16px;
            }
            body {
                padding: 70px 0 50px;
            }
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
    <div class="card">
        <img src="img/logoM.png" alt="Logo Meteorología FAA" style="max-width:160px;width:100%;height:auto;">
        <h2>Briefing Meteorológico Militar</h2>

        <div class="meno" role="navigation" aria-label="Menú briefing">
            <!-- Orden y colores tal como en la imagen -->
            <a href="#" class="meno-item btn-alerta">Alertas y Avisos</a>

            <a href="observaciones.php" class="meno-item btn-azul-oscuro">Observaciones</a>
            <a href="imagenes-satelitales.php" class="meno-item btn-azul-oscuro">Imágenes Satelitales</a>
            <a href="#" class="meno-item btn-azul-oscuro">Cartas Sinópticas de Superficie</a>
            <a href="#" class="meno-item btn-azul-oscuro">Cartas Pronosticadas</a>

            <a href="https://imagenesmeteorologicas.faa.mil.ar/app/model/verinfo.php" class="meno-item btn-azul">Pronósticos por FIR</a>
            <a href="#" class="meno-item btn-azul">Pronósticos Especiales</a>

            <a href="#" class="meno-item btn-espacio">Meteorología del Espacio</a>
            <a href="#" class="meno-item btn-apoyo">Documentos de Apoyo</a>
            <a href="#" class="meno-item btn-apoyo">Links de Apoyo</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo" style="height:22px;vertical-align:middle;margin-right:8px;">
        <p style="display:inline-block;vertical-align:middle;margin:0;">&copy; 2025 Imágenes Meteorologicas - Dirección de Informática</p>
    </footer>
</body>
</html>
