<?php
session_start();

// Ejemplo de datos fijos (más adelante se conecta a DB)
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === "test@mail.com" && $password === "1234") {
    $_SESSION['usuario'] = $email;
    header("Location: perfil.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>