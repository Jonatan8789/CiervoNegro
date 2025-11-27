<?php
require '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_id = $_POST["user_id"];
    $token   = $_POST["token"];
    $pass1   = $_POST["pass1"];
    $pass2   = $_POST["pass2"];

    if ($pass1 !== $pass2) {
        echo "<script>alert('Las contraseñas no coinciden'); history.back();</script>";
        exit;
    }

    // Hashear contraseña
    $password_hash = password_hash($pass1, PASSWORD_DEFAULT);

    // Actualizar contraseña
    $sql = "UPDATE usuarios SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $password_hash, $user_id);
    $stmt->execute();

    // Borrar token usado
    $sql2 = "DELETE FROM recuperacion WHERE token = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("s", $token);
    $stmt2->execute();

    echo "<script>
        alert('Contraseña actualizada con éxito');
        window.location.href='login.php';
    </script>";
}
?>