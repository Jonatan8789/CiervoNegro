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
  <main class="auth-container">
    <section class="auth-form">
      <h2>Iniciar Sesión</h2>

      <form action="procesar_login.php" method="POST" autocomplete="off">
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

        <div class="form-group">
          <label for="password">Contraseña</label>
          <input 
            type="password" 
            id="password" 
            name="password" 
            required
            autocomplete="current-password"
          >
        </div>

        <button type="submit" class="btn-enviar">Ingresar</button>
      </form>

      <p class="extra">
        ¿No tenés cuenta? <a href="registro.php">Registrate</a>
      </p>
    </section>
  </main>
</body>
</html>