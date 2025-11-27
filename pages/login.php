<?php
session_start();

// Si ya está logueado, redirige al perfil
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - Ciervo Negro</title>
<<<<<<< HEAD
<link rel="stylesheet" href="../styles/style.css">
=======
 <link rel="stylesheet" href="../styles/style.css" />
>>>>>>> aa21b071b825d123a85b25cd2e83b7d92d3f9b4b
</head>
<body>
<div class="login-container">
    <div class="login-box">

        <div class="login-left">
            <img src="../assets/logos/Logo_ciervo.png" alt="Login">
        </div>

        <div class="login-right">
            <h2>Member Login</h2>

            <input type="email" placeholder="Email" class="login-input">
            <input type="password" placeholder="Password" class="login-input">

            <button class="login-btn">LOGIN</button>

            <div class="login-extra">
                <a href="recuperopass.php">¿Olvidaste tu usuario o contraseña?</a>
            </div>

            <div class="login-register">
                ¿No tienes cuenta? <a href="../php/registro.php">Crear Cuenta →</a>
            </div>
        </div>

    </div>
    </section>
  </main>
</body>
</html>