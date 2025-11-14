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
 <link rel="stylesheet" href="../styles/style.css" />
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
                <a href="#">¿Olvidaste tu usuario o contraseña?</a>
            </div>

            <div class="login-register">
                ¿No tienes cuenta? <a href="#">Crear Cuenta →</a>
            </div>
        </div>

    </div>
    </section>
  </main>
</body>
</html>