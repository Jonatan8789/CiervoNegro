<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <link rel="stylesheet" href="../styles/style.css"> <!-- Usa el mismo CSS del login -->
<<<<<<< HEAD
=======
    
    <style>
        /* Ajustes específicos de recuperar contraseña */
        body {
            background-color: #000000;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            margin: 80px auto;
            background: #111;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 12px rgba(255,255,255,0.15);
        }

        .login-container h2 {
            color: #fff;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .login-container input[type="email"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            background-color: #b10000;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #d40000;
        }

        .links a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
>>>>>>> aa21b071b825d123a85b25cd2e83b7d92d3f9b4b
</head>

<body>

    <div class="login-container">
<<<<<<< HEAD
          <div class="login-right login-box">
            <h2>Recuperar Contraseña</h2>

            <form action="enviar_enlace.php" method="POST">
                <input type="email" name="correo" placeholder="Correo electrónico" required class="login-input">
                <button type="submit" class="login-btn">Enviar enlace</button>
            </form>

            <div class="extra">
                <p><a href="login.php">Volver al login</a></p>
            </div>
        </div>
    </div>
=======
        <h2>Recuperar Contraseña</h2>

        <form action="enviar_enlace.php" method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <button type="submit" class="login-btn">Enviar enlace</button>
        </form>

        <div class="links">
            <p><a href="login.php">Volver al login</a></p>
        </div>
    </div>

>>>>>>> aa21b071b825d123a85b25cd2e83b7d92d3f9b4b
</body>
</html>