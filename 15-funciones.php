<?php 
declare(strict_types = 1);
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0){
    echo $numero1 + $numero2;
}

sumar(10, 20);
echo "</br>" ;
sumar();


/*
!En PHP8 se pueden hacer cosas distintas por ejemplo

function sumar( int $numero1, int $numero2 ){
    echo $numero1;
    echo "</br>";
    echo $numero1 + $numero2;
}

sumar($numero2:10, $numero1: 10);

?Esto funcionaria igual, pero funciona desde php8
*/



include 'includes/footer.php';