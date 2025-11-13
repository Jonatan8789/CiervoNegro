<?php
// conexion.php - editar credenciales segun tu entorno
$DB_HOST = '149.62.37.52';
$DB_USER = 'u904052052_admin';
$DB_PASS = 'CiervoNegro2025**!';
$DB_NAME = 'u904052052_db_ciervonegro';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$conn->set_charset('utf8mb4');

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos: " . $DB_NAME;
}

// Establecer charset
$conn->set_charset('utf8mb4');
?>

