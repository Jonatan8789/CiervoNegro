<?php
session_start();
require_once "conexion.php";

// Validar que lleguen los datos
if (!isset($_POST['token'], $_POST['password'], $_POST['confirm_password'])) {
    die("Error: Datos incompletos.");
}

$token = $_POST['token'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Verificar que las contraseñas coincidan
if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden.");
}

// Verificar que la contraseña tenga al menos 6 caracteres
if (strlen($password) < 6) {
    die("La contraseña debe tener al menos 6 caracteres.");
}

// Verificar que el token sea válido y no haya expirado
$sql_check = "SELECT id FROM usuarios WHERE reset_token = ? AND reset_expira > NOW()";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $token);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows === 0) {
    die("Token inválido o expirado.");
}

$user = $result->fetch_assoc();
$user_id = $user['id'];

// Encriptar nueva contraseña
$passHash = password_hash($password, PASSWORD_DEFAULT);

// Actualizar contraseña y limpiar token
$sql_update = "UPDATE usuarios SET password = ?, reset_token = NULL, reset_expira = NULL WHERE id = ?";
$stmt_update = $conn->prepare($sql_update);
$stmt_update->bind_param("si", $passHash, $user_id);

if ($stmt_update->execute()) {
    echo "<script>
            alert('Contraseña restablecida exitosamente. Ya podés iniciar sesión con tu nueva contraseña.');
            window.location.href='login.php';
          </script>";
} else {
    echo "<script>
            alert('Error al restablecer la contraseña. Inténtalo de nuevo.');
            window.location.href='reset_password.php?token=" . urlencode($token) . "';
          </script>";
}

$stmt_check->close();
$stmt_update->close();
$conn->close();
?>
