<?php
// Cabecera para que devuelva JSON
header('Content-Type: application/json');

// Incluir conexión a la base de datos
include 'conexion.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(['error' => 'ID de producto requerido']);
    exit();
}

// Consulta para obtener un producto específico
$sql = "SELECT id, nombre, descripcion, precio, categoria, imagen, colores FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Decodificar colores si es JSON
    $colores = json_decode($row['colores'], true);
    if ($colores === null) {
        $colores = [];
    }

    $producto = [
        "id" => (int)$row['id'],
        "nombre" => $row['nombre'],
        "descripcion" => $row['descripcion'],
        "precio" => (float)$row['precio'],
        "categoria" => $row['categoria'],
        "imagen" => $row['imagen'],
        "colores" => $colores
    ];

    echo json_encode($producto);
} else {
    echo json_encode(['error' => 'Producto no encontrado']);
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
