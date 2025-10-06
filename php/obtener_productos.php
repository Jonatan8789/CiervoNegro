<?php
// Cabecera para que devuelva JSON
header('Content-Type: application/json');

// Ejemplo de productos (pueden venir de base de datos)
$productos = [
    [
        "id" => 1,
        "nombre" => "Remera básica",
        "precio" => 7500,
        "imagen" => "assets/productos/CN_Julio_2502.jpg", // imagen por defecto
        "colores" => [
            [
                "nombre" => "Blanco",
                "hex" => "#ffffff",
                "imagen" => "assets/productos/CN_Julio_2503.jpg"
            ],
            [
                "nombre" => "Negro",
                "hex" => "#000000",
                "imagen" => "assets/productos/CN_Julio_2505.jpg"
            ],
            [
                "nombre" => "Rojo",
                "hex" => "#ff0000",
                "imagen" => "assets/productos/CN_Julio_2504.jpg"
            ]
        ]
    ],
    [
        "id" => 2,
        "nombre" => "Buzo hoodie",
        "precio" => 12500,
        "imagen" => "assets/productos/CN_Julio_2501.jpg",
        "colores" => [
            [
                "nombre" => "Gris",
                "hex" => "#cccccc",
                "imagen" => "assets/productos/CN_Julio_2508.jpg"
            ],
            [
                "nombre" => "Azul",
                "hex" => "#0033cc",
                "imagen" => "assets/productos/CN_Julio_2509.jpg"
            ]
        ]
    ]
];

// Devolver en formato JSON
echo json_encode($productos);
