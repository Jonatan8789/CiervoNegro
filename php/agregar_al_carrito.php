<?php
session_start();

$id = $_GET['id'] ?? 0;
$color = $_GET['color'] ?? '';
$imagen = $_GET['imagen'] ?? '';

// Ejemplo de búsqueda de producto (reemplazar por tu consulta real)
$producto = [
    "id" => $id,
    "name" => "Producto de ejemplo",
    "price" => 2500,
    "color" => $color,
    "imagen" => $imagen
];

// Guardar en sesión (puedes usar DB)
$_SESSION['carrito'][] = $producto;

echo json_encode([
    "success" => true,
    "producto" => $producto
]);
?>