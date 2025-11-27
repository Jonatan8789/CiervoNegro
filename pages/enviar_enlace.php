<?php
require '../conexion.php'; // tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST["correo"];

    // 1. Verificar si el correo existe
    $sql = "SELECT id FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo "<script>alert('El correo no existe.'); window.location.href='recuperar.php';</script>";
        exit;
    }

    // Obtener ID del usuario
    $stmt->bind_result($user_id);
    $stmt->fetch();

    // 2. Generar token único
    $token = bin2hex(random_bytes(32));
    $expira = date("Y-m-d H:i:s", strtotime("+1 hour"));

    // 3. Guardar token en DB
    $sql2 = "INSERT INTO recuperacion (user_id, token, expira) VALUES (?, ?, ?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("iss", $user_id, $token, $expira);
    $stmt2->execute();

    // 4. Enviar email con el enlace
    $enlace = "https://www.ciervonegro.com.ar/pages/restablecer.php?token=" . $token;

    $asunto = "Recuperación de contraseña - Ciervo Negro";
    $mensaje = "Hola!\n\nSolicitaste restablecer tu contraseña.\n\nHacé clic en este enlace:\n$enlace\n\nEl enlace expira en 1 hora.";
    $cabeceras = "From: soporte@ciervonegro.com.ar\r\n";

    mail($correo, $asunto, $mensaje, $cabeceras);

    echo "<script>alert('Se envió un enlace de recuperación a tu correo.'); window.location.href='login.php';</script>";
}
?>