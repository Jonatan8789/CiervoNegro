<?php
// Cabecera para que devuelva JSON
header('Content-Type: application/json');

// Incluir conexión a la base de datos
include 'conexion.php';

// Consulta para obtener productos
$sql = "SELECT id, nombre, descripcion, precio, categoria, imagen, colores FROM productos ORDER BY fecha_creacion DESC";
$result = $conn->query($sql);

$productos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Decodificar colores si es JSON
        $colores = json_decode($row['colores'], true);
        if ($colores === null) {
            $colores = [];
        }

        $productos[] = [
            "id" => (int)$row['id'],
            "nombre" => $row['nombre'],
            "descripcion" => $row['descripcion'],
            "precio" => (float)$row['precio'],
            "categoria" => $row['categoria'],
            "imagen" => $row['imagen'],
            "colores" => $colores
        ];
    }
}

// Cerrar conexión
$conn->close();

// Devolver en formato JSON
echo json_encode($productos);
