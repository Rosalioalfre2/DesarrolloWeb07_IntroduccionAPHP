<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Rosalio",
    "tipo" => "Premium",
    "saldo" => 200
];

if( empty($cliente) ){
    echo "No hay cliente registrado";
}
else{
    echo "El cliente registrado es " . $cliente["nombre"];
}

echo "</br>";
echo "</br>";

if( !empty($cliente) ){
    echo "El cliente registrado es " . $cliente["nombre"];

    if( $cliente['tipo'] === "Premium" ){
        echo "El cliente es premium";
    }
    else if( $cliente['tipo'] === "estandar" ){
        echo "El cliente es estandar";
    }
    else{
        echo "Tipo de cliente: Desconocido";
    }
}

echo "</br>";
echo "</br>";

$lenguaje = "html";
$lenguaje = strtoupper($lenguaje);
switch ($lenguaje) {
    case 'PHP':
        echo "PHP es un buen lenguaje";
        break;
    case 'JAVASCRIPT':
        echo "Javascript, el lenguaje de la web";
        break;
    case "HTML":
        echo 'No Patricio, HTML no es un lenguaje de programacion';
        break;
    default:
        echo 'Desconozco el lenguaje';
        break;
}

include 'includes/footer.php';