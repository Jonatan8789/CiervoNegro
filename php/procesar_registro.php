<?php
session_start();
require_once "conexion.php"; // Ajustá la ruta si está en otra carpeta

// Validar que lleguen los datos
if (!isset($_POST['nombre'], $_POST['email'], $_POST['password'])) {
    die("Error: Datos incompletos.");
}

$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido.");
}

// Verificar si el email ya existe
$sql_check = "SELECT id FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>
            alert('El correo ya está registrado.');
            window.location.href='registro.php';
          </script>";
    exit();
}

// Encriptar contraseña
$passHash = password_hash($password, PASSWORD_DEFAULT);

// Insertar nuevo usuario
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $passHash);

if ($stmt->execute()) {
    echo "<script>
            alert('Registro exitoso. ¡Ya podés iniciar sesión!');
            window.location.href='login.php';
          </script>";
} else {
    echo "Error al registrar usuario.";
}

$stmt->close();
$conn->close();
?>