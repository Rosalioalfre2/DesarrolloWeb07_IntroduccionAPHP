<?php include 'includes/header.php';

$productos = ["Television", "Carro", "Pesas"];

echo "<pre>";
var_dump(($productos));
echo "</pre>";

//Añadir un valor en una posicion
$productos[3] = "Cafe";
echo "<pre>";
var_dump(($productos));
echo "</pre>";

//Añadir un valor al final
array_push($productos, "Cacao");
echo "<pre>";
var_dump(($productos));
echo "</pre>";

//Añadir un valor al inicio
array_unshift($productos, "Coca cola");
echo "<pre>";
var_dump(($productos));
echo "</pre>";

//Otra forma de crear arreglos
$clientes = array("Rosalio", "Alfredo", "Monterrosa", "Valle");
echo "<pre>";
var_dump(($clientes));
echo "</pre>";

include 'includes/footer.php';