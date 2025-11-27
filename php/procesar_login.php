<?php
session_start();
require_once "conexion.php";

// Validar que lleguen los datos
if (!isset($_POST['email'], $_POST['password'])) {
    die("Error: Datos incompletos.");
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido.");
}

// Buscar usuario en la base de datos
$sql = "SELECT id, email, password, rol FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verificar contraseña
    if (password_verify($password, $user['password'])) {
        // Login exitoso - guardar datos en sesión
        $_SESSION['usuario'] = $user['email'];
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['rol'] = $user['rol'];

        // Redirigir según el rol
        if ($user['rol'] === 'admin') {
            header("Location: ../pages/admin_productos.php");
        } else {
            header("Location: perfil.php");
        }
        exit();
    } else {
        echo "<script>
                alert('Contraseña incorrecta.');
                window.location.href='login.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Usuario no encontrado.');
            window.location.href='login.php';
          </script>";
}

$stmt->close();
$conn->close();
?>
