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
  <title>Recuperar Contraseña - Ciervo Negro</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  <main class="auth-container">
    <section class="auth-form">
      <h2>Recuperar Contraseña</h2>
      <p>Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>

      <form action="procesar_recuperacion.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            autocomplete="email"
          >
        </div>

        <button type="submit" class="btn-enviar">Enviar enlace de recuperación</button>
      </form>

      <p class="extra">
        <a href="login.php">Volver al inicio de sesión</a>
      </p>
    </section>
  </main>
</body>
</html>
