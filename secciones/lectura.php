<?php
//INSERT INTO `lectura` (`id`, `consumo`) VALUES ('3', '100');
include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

print_r($_POST);


$consulta=$conexionBD->prepare("SELECT * FROM lectura");
//$consulta->execute();
$listaLectura=$consulta->fetchAll();
print_r($listaLectura);




?>