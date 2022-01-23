<?php include 'includes/header.php';

//* Datos
$productos = [
    [
        "nombre" => "Computadora",
        "precio" => 600,
        "disponible" => true
    ],
    [
        "nombre" => "Iphone",
        "precio" => 1000,
        "disponible" => true
    ],
    [
        "nombre" => "Calculadora",
        "precio" => 20,
        "disponible" => false
    ]
];

?>

<table>
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Disponibilidad</th>
</tr>
<?php
foreach( $productos as $producto ){
    ?>
        <tr>
            <td><?php echo $producto["nombre"]; ?></td>
            <td><?php echo $producto["precio"]; ?></td>
            <td><?php echo ($producto["disponible"]) ? "Disponible" : "No disponible" ?></td>
        </tr>
    <?php
}
?>
    </table>
<?php

include 'includes/footer.php';