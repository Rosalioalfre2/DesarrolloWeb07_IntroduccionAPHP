<?php include 'includes/header.php';

$cliente = [
    'nombre' => "Rosalio",
    "saldo" => 200,
    "informacion" => [
        'tipo' => "premium",
        'telefono' => "normal"
    ]
];

//Agregar el cliente
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "</br>" . $cliente["nombre"];

$cliente["codigo"] = "123456";
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
