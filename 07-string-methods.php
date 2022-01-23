<?php include 'includes/header.php';

$nombreCliente = "      Rosalio Monterrosa       ";
echo $nombreCliente;
echo "</br>";
echo strlen($nombreCliente);
echo "</br>";
var_dump($nombreCliente);

//eliminar espacios en blanco (antes y despues de un string)
echo "</br></br>";
$texto = trim($nombreCliente);
echo strlen($texto);


//Convertir a mayusculas
echo "</br></br>";
echo strtoupper($texto);

//Convertir a minusculas
echo "</br></br>";
echo strtolower($texto);


$mail1 = "correo1@correo.com";
$mail2 = "Correo1@correo.com";

echo "</br></br>";
var_dump((strtolower($mail2)) === $mail1);


echo "</br></br>";
echo str_replace('Rosalio','R',$texto);


//Revisar si un strin existe o no
echo "</br></br>";
echo strpos($nombreCliente, 'Ros');


$tipoCliente = "premium";
echo "</br></br>" . $nombreCliente . " es " . $tipoCliente;
echo "</br></br> {$nombreCliente} es {$tipoCliente}";
include 'includes/footer.php';