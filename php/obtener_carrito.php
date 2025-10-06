
<?php
session_start();
include 'conexion.php'; // tu conexión a la DB

$user_id = $_SESSION['user_id']; // o como guardes el usuario

$query = $conn->prepare("SELECT c.id, p.nombre AS name, p.precio AS price 
                         FROM carrito c 
                         INNER JOIN productos p ON c.producto_id = p.id
                         WHERE c.usuario_id = ?");
$query->execute([$user_id]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>
