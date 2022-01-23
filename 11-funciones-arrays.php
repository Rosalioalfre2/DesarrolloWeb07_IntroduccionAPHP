<?php include 'includes/header.php';

$carrito = ["tablet", "television", "bicicleta"];

//*Buscar si existe algo en un array
var_dump( in_array("audifonos", $carrito));
var_dump( in_array("tablet", $carrito));

$numero = [5,6,2,9,4,2];

sort($numero); //Se orderana de menor a mayor
rsort($numero); //Se orderana de mayor a menor

echo "<pre>";
var_dump($numero);
echo "</pre>";


//*Ordenar arreglo asociativo
$cliente = array(
    "nombre" => "Rosalio",
    "apellido" => "Monterrosa",
    "edad" => 21,
    "Estatura (cm)" => 180
);


echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//Ordena valores de orden alfabetico
arsort($cliente);//Ordenad valores inverso a orden alfabeitco
ksort($cliente);//Ordena llaves por orden alfabetico
krsort($cliente);//Ordena llaves por orden inverso alfabetico

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';