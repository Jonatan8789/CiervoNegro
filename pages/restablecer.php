<?php
require '../conexion.php';

if (!isset($_GET['token'])) {
    die("Token inválido.");
}

$token = $_GET['token'];

// Verificar token
$sql = "SELECT user_id, expira FROM recuperacion WHERE token = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $token);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    die("Enlace no válido o expirado.");
}

$stmt->bind_result($user_id, $expira);
$stmt->fetch();

// Verificar expiración
if (strtotime($expira) < time()) {
    die("El enlace expiró. Solicitá uno nuevo.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>

    <link rel="stylesheet" href="../styles/style.css">

    <style>
        body {
            background: #000;
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

        input[type="password"] {
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
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Crear nueva contraseña</h2>

        <form action="update_password.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <input type="hidden" name="token" value="<?php echo $token; ?>">

            <input type="password" name="pass1" placeholder="Nueva contraseña" required>
            <input type="password" name="pass2" placeholder="Confirmar contraseña" required>

            <button type="submit" class="login-btn">Actualizar</button>
        </form>
    </div>

</body>
</html>