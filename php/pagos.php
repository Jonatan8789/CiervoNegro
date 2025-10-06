<?php
// Configuración de conexión a MySQL
$host = "localhost";
$usuario = "root"; // Cambiar si es necesario
$clave = ""; // Cambiar si es necesario
$base_datos = "tienda"; // Cambiar por el nombre de tu BD

$conn = new mysqli($host, $usuario, $clave, $base_datos);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Filtros
$filtro_email = $_GET['email'] ?? '';
$filtro_estado = $_GET['estado'] ?? '';

// Query con filtros
$sql = "SELECT * FROM pagos WHERE 1=1";
if ($filtro_email !== '') {
    $sql .= " AND email LIKE '%" . $conn->real_escape_string($filtro_email) . "%'";
}
if ($filtro_estado !== '') {
    $sql .= " AND estado = '" . $conn->real_escape_string($filtro_estado) . "'";
}
$sql .= " ORDER BY fecha DESC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Pagos</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f9fa; padding: 20px; }
        h1 { text-align: center; color: #333; }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input, select {
            padding: 6px;
            margin: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 6px 12px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background: #0056b3; }
        table {
            border-collapse: collapse;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 1000px;
        }
        th, td {
            padding: 10px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) { background: #f2f2f2; }
        .estado { padding: 5px 10px; border-radius: 4px; color: white; font-weight: bold; }
        .estado.approved { background: #28a745; }
        .estado.pending { background: #ffc107; color: black; }
        .estado.rejected { background: #dc3545; }
    </style>
</head>
<body>
    <h1>Historial de Pagos</h1>

    <form method="GET" action="">
        <input type="text" name="email" placeholder="Buscar por email" value="<?= htmlspecialchars($filtro_email) ?>">
        <select name="estado">
            <option value="">Todos los estados</option>
            <option value="approved" <?= $filtro_estado == 'approved' ? 'selected' : '' ?>>Aprobado</option>
            <option value="pending" <?= $filtro_estado == 'pending' ? 'selected' : '' ?>>Pendiente</option>
            <option value="rejected" <?= $filtro_estado == 'rejected' ? 'selected' : '' ?>>Rechazado</option>
        </select>
        <button type="submit">Buscar</button>
        <button type="button" onclick="window.location='?export=1'">Exportar a Excel</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>ID Pago</th>
            <th>Estado</th>
            <th>Monto</th>
            <th>Email</th>
            <th>Fecha</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['payment_id'] ?></td>
                    <td><span class="estado <?= $row['estado'] ?>"><?= $row['estado'] ?></span></td>
                    <td>$<?= number_format($row['monto'], 2, ',', '.') ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['fecha'] ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay pagos registrados</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
<?php
// Exportar a CSV (Excel)
if (isset($_GET['export']) && $_GET['export'] == 1) {
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=pagos.csv");
    $out = fopen("php://output", "w");
    fputcsv($out, ["ID", "ID Pago", "Estado", "Monto", "Email", "Fecha"]);
    $result_csv = $conn->query($sql);
    while ($row = $result_csv->fetch_assoc()) {
        fputcsv($out, $row);
    }
    fclose($out);
    exit;
}
$conn->close();
?>

