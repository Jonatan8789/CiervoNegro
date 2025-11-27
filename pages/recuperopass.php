<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <link rel="stylesheet" href="../styles/style.css"> <!-- Usa el mismo CSS del login -->
</head>

<body>

    <div class="login-container">
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
</body>
</html>