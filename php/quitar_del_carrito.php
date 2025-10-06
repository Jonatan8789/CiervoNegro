<?php
session_start();
include 'conexion.php'; // conexión DB

$user_id = $_SESSION['user_id']; // usuario actual
$product_id = $_GET['id'];

$query = $conn->prepare("DELETE FROM carrito WHERE id = ? AND usuario_id = ?");
$success = $query->execute([$product_id, $user_id]);

echo json_encode(["success" => $success]);
?>
