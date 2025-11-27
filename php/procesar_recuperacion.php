<?php
session_start();
require_once "conexion.php";

// Validar que llegue el email
if (!isset($_POST['email'])) {
    die("Error: Email requerido.");
}

$email = trim($_POST['email']);

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido.");
}

// Verificar si el email existe en la base de datos
$sql_check = "SELECT id FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    // No revelar si el email existe o no por seguridad
    echo "<script>
            alert('Si el correo existe en nuestro sistema, recibirás un enlace de recuperación.');
            window.location.href='login.php';
          </script>";
    exit();
}

// Generar token único
$token = bin2hex(random_bytes(32));
$expira = date('Y-m-d H:i:s', strtotime('+1 hour')); // Expira en 1 hora

// Guardar token en la base de datos
$sql_token = "UPDATE usuarios SET reset_token = ?, reset_expira = ? WHERE email = ?";
$stmt_token = $conn->prepare($sql_token);
$stmt_token->bind_param("sss", $token, $expira, $email);

if ($stmt_token->execute()) {
    // Enviar email (en producción usarías un servicio como SendGrid, Mailgun, etc.)
    $reset_link = "http://" . $_SERVER['HTTP_HOST'] . "/php/reset_password.php?token=" . $token;

    $asunto = "Recuperación de contraseña - Ciervo Negro";
    $mensaje = "
    <html>
    <head>
        <title>Recuperación de contraseña</title>
    </head>
    <body>
        <h2>Recuperación de contraseña</h2>
        <p>Haz clic en el siguiente enlace para restablecer tu contraseña:</p>
        <p><a href='$reset_link'>Restablecer contraseña</a></p>
        <p>Este enlace expirará en 1 hora.</p>
        <p>Si no solicitaste este cambio, ignora este mensaje.</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@ciervonegro.com" . "\r\n";

    // Enviar email
    if (mail($email, $asunto, $mensaje, $headers)) {
        echo "<script>
                alert('Se ha enviado un enlace de recuperación a tu correo electrónico.');
                window.location.href='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al enviar el email. Inténtalo de nuevo más tarde.');
                window.location.href='recuperar_password.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Error al procesar la solicitud. Inténtalo de nuevo.');
            window.location.href='recuperar_password.php';
          </script>";
}

$stmt->close();
$stmt_token->close();
$conn->close();
?>
