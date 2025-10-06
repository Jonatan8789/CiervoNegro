<?php
$payment_id = $_GET['payment_id'] ?? '';
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago Pendiente</title>
    <style>
        body { font-family: Arial; background: #fff8e1; text-align: center; padding: 50px; }
        h1 { color: #f9a825; }
    </style>
</head>
<body>
    <h1>Pago pendiente</h1>
    <p>Tu pago está pendiente de confirmación. Te notificaremos cuando se acredite.</p>
    <p><strong>ID de pago:</strong> <?php echo htmlspecialchars($payment_id); ?></p>
    <p><strong>Estado:</strong> <?php echo htmlspecialchars($status); ?></p>
    <a href="index.html">Volver a la tienda</a>
</body>
</html>
