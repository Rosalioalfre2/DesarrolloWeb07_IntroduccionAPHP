<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado = false) : string{
    return ($autenticado) ? "Esta autenticado" : "No esta autenticado";
}

$usuario = usuarioAutenticado();
echo $usuario;

include 'includes/footer.php';