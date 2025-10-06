<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro - Ciervo Negro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="auth-container">
    <section class="auth-form">
      <h2>Crear Cuenta</h2>
      <form action="procesar_registro.php" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn-enviar">Registrarme</button>
      </form>

      <p class="extra">¿Ya tenés cuenta? <a href="login.php">Ingresá</a></p>
    </section>
  </main>
</body>
</html>
