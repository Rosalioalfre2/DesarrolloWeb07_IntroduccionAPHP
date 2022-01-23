<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Juan", "Mateo", "Marcos");
$cliente = [
    "nombre" => "Rosalio",
    "edad" =>21
];

//Empty, revisa si un arreglo esta vacio
var_dump(empty($clientes3));
var_dump(empty($clientes ));
var_dump(empty($clientes2));

echo "</br>";
echo "</br>";
//Isset, revisa si algun arreglo o variable ya esta definido
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );
var_dump( isset($clientes4) );

echo "</br>";
echo "</br>";
//Tambien sirve para saber si en un arreglo ya existe una propiedad
var_dump( isset($cliente["nombre"]) );
var_dump( isset($cliente["codigo"]) );




include 'includes/footer.php';