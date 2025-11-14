<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro - Ciervo Negro</title>

  <link rel="stylesheet" href="../styles/style.css">

</head>

<body>

  <div class="login-container">
    <div class="login-right login-box">
      <h2>Crear Cuenta</h2>

      <form action="procesar_registro.php" method="POST" autocomplete="off">

        <input 
          type="text" 
          id="nombre" 
          name="nombre" 
          placeholder="Nombre completo"
          required
          class="login-input"
        >

        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Correo electrónico"
          required
          class="login-input"
        >

        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Contraseña"
          required
          class="login-input"
        >

        <button type="submit" class="login-btn">Registrarme</button>
      </form>

      <p class="extra">
        ¿Ya tenés cuenta? <a href="../pages/login.php">Ingresá</a>
      </p>
  </div>
</div>
</body>
</html>