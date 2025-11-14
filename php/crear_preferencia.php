<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Tu Access Token de prueba (Sandbox)
$access_token = "TEST-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

// Recibir datos enviados desde el frontend
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["items"]) || empty($data["items"])) {
    echo json_encode(["error" => "No hay productos"]);
    exit;
}

// Crear preferencia en Mercado Pago
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.mercadopago.com/checkout/preferences");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $access_token
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

$preference_data = [
    "items" => array_map(function($item) {
        return [
            "title" => $item["nombre"],
            "quantity" => 1,
            "unit_price" => $item["precio"],
            "currency_id" => "ARS"
        ];
    }, $data["items"]),
    "back_urls" => [
        "success" => "success.php",
        "failure" => "failure.php",
        "pending" => "pending.php"
    ],
    "auto_return" => "approved",
    "notification_url" => "https://ciervonegro.com.ar/webhook.php"
];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($preference_data));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
