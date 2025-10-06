<?php
// Configuración de conexión a MySQL
$host = "localhost";
$usuario = "root"; // Cambiar si tu usuario de MySQL es diferente
$clave = ""; // Cambiar si tu MySQL tiene contraseña
$base_datos = "tienda"; // Cambiar por el nombre de tu BD

// Conectar a MySQL
$conn = new mysqli($host, $usuario, $clave, $base_datos);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Access Token de prueba Mercado Pago
$access_token = "TEST-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

// Capturar datos enviados por Mercado Pago
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Guardar log (opcional para depuración)
file_put_contents("mp_log.txt", date("Y-m-d H:i:s") . " - " . $input . "\n", FILE_APPEND);

// Si es una notificación de pago
if (isset($data["type"]) && $data["type"] === "payment") {
    $payment_id = $data["data"]["id"];

    // Consultar detalles del pago en la API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.mercadopago.com/v1/payments/" . $payment_id);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $access_token
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $payment_info = json_decode($response, true);

    if ($payment_info && isset($payment_info["status"])) {
        $estado = $conn->real_escape_string($payment_info["status"]);
        $monto = $payment_info["transaction_amount"];
        $email = $conn->real_escape_string($payment_info["payer"]["email"] ?? "desconocido");

        // Insertar en la base de datos
        $sql = "INSERT INTO pagos (payment_id, estado, monto, email) 
                VALUES ('$payment_id', '$estado', '$monto', '$email')";
        $conn->query($sql);
    }
}

$conn->close();

// Responder a Mercado Pago
http_response_code(200);
echo json_encode(["status" => "ok"]);