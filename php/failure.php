<?php
$payment_id = $_GET['payment_id'] ?? '';
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago Rechazado</title>
    <style>
        body { font-family: Arial; background: #ffe6e6; text-align: center; padding: 50px; }
        h1 { color: #c62828; }
    </style>
</head>
<body>
    <h1>Pago rechazado</h1>
    <p>Hubo un problema al procesar tu pago. Intenta nuevamente.</p>
    <p><strong>ID de pago:</strong> <?php echo htmlspecialchars($payment_id); ?></p>
    <p><strong>Estado:</strong> <?php echo htmlspecialchars($status); ?></p>
    <a href="index.php">Volver a la tienda</a>
</body>
</html>
