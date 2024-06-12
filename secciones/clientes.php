<?php
include 'BD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $conexion = BD::crearInstancia();

    $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$nombre, $email, $telefono]);

    echo "Cliente ingresado correctamente.";
}
?>
