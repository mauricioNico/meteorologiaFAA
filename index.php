<?php
session_start();

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['Usuario']) ? trim($_POST['Usuario']) : '';
    $contraseña = isset($_POST['Contraseña']) ? $_POST['Contraseña'] : '';
    
    // Credenciales válidas
    $usuario_valido = 'Mlaurizi';
    $contraseña_valida = 'Tero123@';
    
    // Verificar credenciales
    if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
        // Crear sesión y redirigir a menu.php
        $_SESSION['usuario'] = $usuario;
        $_SESSION['autenticado'] = true;
        header('Location: menu.php');
        exit();
    } else {
        $error_message = 'Usuario o contraseña incorrectos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

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
        .bodya {
            background-color: #f7fafc; /* bg-gray-100 */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            height: 60px; /* Altura personalizada */
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #00246b; /* Azul oscuro fuerza aérea */
            color: white;
            z-index: 50;
            display: flex;
            align-items: center;
            padding: 0 1rem; /* px-4 */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* shadow-md */
        }
        .container-a {
            max-width: 1200px; /* mx-auto */
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .navbar a, .navbar span {
            font-weight: bold; /* font-bold */
            font-size: 1.125rem; /* text-lg */
            color: white;
            text-decoration: none;
        }
        .navbar a:hover, .navbar span:hover {
            color: #d1d5db; /* hover:text-gray-300 */
        }
        #menu-button {
            display: none; /* lg:hidden */
            color: #d1d5db; /* text-gray-300 */
            background: none;
            border: none;
            cursor: pointer;
            outline: none; /* focus:outline-none */
        }
        .menu {
            display: flex;
            gap: 1rem; /* space-x-4 */
        }
        @media (max-width: 1024px) {
            #menu-button {
                display: block; /* lg:hidden */
            }
            .menu {
                display: none; /* hidden */
            }
        }
        
        footer {
            height: 30px; /* Altura definida */
            background-color: #00246b; /* Azul oscuro fuerza aérea */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 2; /* Este estará encima */
        }
        p {
    margin: 0;
    padding: 0;
}
.card-body p {
    margin: 10px 0;
    font-size: 1rem;
    color: #333;
}
footer p {
    margin: 10px 0;  /* Restaura el margen para el párrafo */
    font-size: 1rem; /* Ajusta el tamaño si es necesario */
    color: white;     /* Asegura un color consistente */
}

    </style>
</head>
<body class="bodya">
    <!-- Header -->
    <nav class="navbar">
        <div class="container-a">
            <a class="ab" href="index.php">Meteorología FAA</a>
            <div class="menu" id="menu">
                                            </div>
        </div>
    </nav>

    <!-- Footer -->
    <footer>
        <img src="../../public/images/escudo.png" alt="Logo Dirinfo" style="height:22px;vertical-align:middle;margin-right:8px;">
        <p style="display:inline-block;vertical-align:middle;margin:0;">&copy; 2025 Imágenes Meteorologicas - Dirección de Informática</p>
    </footer>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
        <title>Meteorología FAA</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .login-container {
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            width: 100%;
            max-width: 380px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container legend {
            font-size: 1.8em;
            color: #00246b;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .login-container div {
            margin-bottom: 15px;
            text-align: left;
        }

        .login-container label {
            font-weight: bold;
            color: #00246b;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
        }

        .login-container input:focus {
            border-color: #00246b;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 51, 102, 0.3);
        }

        .login-container input[type="submit"] {
            background: #00246b;
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-container input[type="submit"]:hover {
            background: #00246b;
            transform: scale(1.05);
        }

        .login-container input[type="submit"]:active {
            background: #00246b;
        }

        .error-message {
            color: #d9534f;
            font-size: 0.9em;
            margin-top: 10px;
            font-weight: bold;
        }

        .extra-links {
            margin-top: 20px;
            font-size: 0.9em;
        }

        .extra-links a {
            color: #00246b;
            text-decoration: none;
            font-weight: bold;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .login-container {
                width: 95%;
                padding: 30px 20px;
            }

            .login-container legend {
                font-size: 1.5em;
                margin-bottom: 20px;
            }

            .login-container input[type="submit"] {
                font-size: 1.1em;
                padding: 10px;
            }

            .login-container div {
                margin-bottom: 12px;
            }

            .login-container input {
                padding: 8px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                width: 100%;
                padding: 20px 15px;
            }

            .login-container legend {
                font-size: 1.3em;
                margin-bottom: 15px;
            }

            .login-container label {
                font-size: 0.95em;
            }

            .login-container input[type="submit"] {
                font-size: 1em;
            }

            .extra-links {
                font-size: 0.85em;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form method="post">
            <fieldset>
                <legend>Iniciar Sesión</legend>
                <input type="hidden" name="csrf_token" value="7c857171f0643e4dfefdcdaae03906a87d671e57163bc1af2fc98cb5abe1c279">
                <div>
                    <label for="Usuario">Usuario:</label>
                    <input type="text" id="Usuario" name="Usuario" required />
                </div>
                <div>
                    <label for="Contraseña">Contraseña:</label>
                    <input type="password" id="Contraseña" name="Contraseña" required />
                </div>
                <div>
                    <input type="submit" value="Ingresar" />
                </div>
                <?php if (!empty($error_message)): ?>
                    <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>
                            </fieldset>
        </form>
        <div class="extra-links" style="color: #333; font-weight: normal;">
            ¿No tienes una cuenta? Por favor, contacta al siguiente email: <strong>mnlaurizi@faa.mil.ar</strong>, RTI 14781 para solicitar la creación de una.
        </div>
    </div>
</body>
</html>