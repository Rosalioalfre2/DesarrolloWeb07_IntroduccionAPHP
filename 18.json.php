<?php include 'includes/header.php';

//* Datos
$productos = [
    [
        "nombre" => "Computadora",
        "precio" => 600,
        "disponible" => true
    ],
    [
        "nombre" => "Iphone",
        "precio" => 1000,
        "disponible" => true
    ],
    [
        "nombre" => "Calculadora",
        "precio" => 20,
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);

echo "</br></br>";
var_dump($json);

echo "</br></br>";
echo "<pre>";
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';