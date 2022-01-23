<?php include 'includes/header.php';

$i = 0;

while($i < 10){
    echo "</br>" . $i;
    $i++;
}

echo "</br>";

do{
    echo "</br>" . $i;
    $i++;
} while( $i < 10);

echo "</br></br>";

/* 
!Ejercicio FIZZ BUZZ
?Si un numero es multiplo de 3 imprimir FIZZ
?Si un numero es multiplo de 5 imprimir BUZZ
?Si un numero es multiplo de ambos (3 y 5) imprimir FIZZ BUZZ
?Si un numero no es multiplo de ninguno dejar el espacio en blanco
*/

/*for ($i=1; $i < 1000; $i++) { 
    if( $i % 3 === 0 && $i % 5 === 0){
        echo "</br>{$i} - FIZZ BUZZ";
    }
    else if( $i % 3 === 0){
        echo "</br>{$i} - FIZZ";
    }
    else if( $i % 5 === 0){
        echo "</br>{$i} - BUZZ";
    }
    else{
        echo "</br>{$i}";
    }
}*/


echo "</br></br>For each</br>";
$clientes = [
    "01" =>[
    "nombre"=>"Rosalio",
    "Apellido" => "Monterrosa",
    "Saldo" => -200
    ],
    "02" =>[
    "nombre"=>"Lisa",
    "Apellido" => "Manoban",
    "Saldo" => 3000
    ],
    "03" =>[
    "nombre"=>"Jisoo",
    "Apellido" => "Park",
    "Saldo" => 5000
    ]
];

foreach( $clientes as $cliente => $informacion){

    $capturador = null;
    foreach($informacion as $descripcion => $info){
        $capturador= $capturador . "</br>" .$descripcion ." -- ". $info;
    };

    echo "</br></br>" . $cliente . $capturador;
};


include 'includes/footer.php';