<?php
// Mostrar información recibida por GET desde Mercado Pago
$payment_id = $_GET['payment_id'] ?? '';
$status = $_GET['status'] ?? '';
$merchant_order_id = $_GET['merchant_order_id'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago Aprobado</title>
    <style>
        body { font-family: Arial; background: #e6ffe6; text-align: center; padding: 50px; }
        h1 { color: #2e7d32; }
    </style>
</head>
<body>
    <h1>¡Pago aprobado!</h1>
    <p>Tu pago fue procesado con éxito.</p>
    <p><strong>ID de pago:</strong> <?php echo htmlspecialchars($payment_id); ?></p>
    <p><strong>Estado:</strong> <?php echo htmlspecialchars($status); ?></p>
    <p><strong>ID de orden:</strong> <?php echo htmlspecialchars($merchant_order_id); ?></p>
    <a href="index.html">Volver a la tienda</a>
</body>
</html>
