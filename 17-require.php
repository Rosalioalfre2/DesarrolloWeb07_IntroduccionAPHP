<?php 
declare(strict_types = 1);
include 'includes/header.php'; //Si en dado caso no encuentra header.php la pagina seguira trabajando con normalidad
require 'includes/calcularEdad.php'; //Si en dado caso no encuentra el archivo.php la pagina se detendra

 calcularEdad(16); //LLamando una funcion de otro archivo, lo incluimos con el require de calcular edad

require_once 'includes/calcularEdad.php'; //Si ya esta incluido el archivo simplememte lo ignora

include 'includes/footer.php';