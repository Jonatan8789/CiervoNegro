<?php
require __DIR__ . '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-7467248525868011-112510-3e7af34f59fb7fe83e53a9e4c1a90f5e-3015030132"); // TEST-XXXXXXXXXXXXXXXX

// Obtener el carrito desde el fetch (JSON)
$body = json_decode(file_get_contents("php://input"), true);

$items = [];

foreach ($body["carrito"] as $producto) {
    $item = new MercadoPago\Item();
    $item->title = $producto["nombre"];
    $item->quantity = $producto["cantidad"];
    $item->unit_price = $producto["precio"];
    $items[] = $item;
}

$preference = new MercadoPago\Preference();
$preference->items = $items;

<<<<<<< HEAD
// URLs para exito, fallo o pago pendiente (modo prueba)
$preference->back_urls = [
    "success" => "https://www.ciervonegro.com.ar/exito.php",
    "failure" => "https://www.ciervonegro.com.ar/error.php",
    "pending" => "https://www.ciervonegro.com.ar/pendiente.php"
=======
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
>>>>>>> aa21b071b825d123a85b25cd2e83b7d92d3f9b4b
];

$preference->auto_return = "approved";

$preference->save();

echo json_encode([ "id" => $preference->id ]);