<?php
session_start();

// SEGURIDAD: Si no es admin, fuera de aquí
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    die("ERROR: No tienes permisos para realizar esta acción.");
}

include("config.php");
// ... aquí sigue tu código normal de INSERT ...

$nombre = $_POST['Producto'];
$precio = $_POST['Precio'];
$stock  = $_POST['Stock'];

$sql = "INSERT INTO productos (Producto, Precio, Stock) VALUES ('$nombre', $precio, $stock)";

if (mysqli_query($conn, $sql)) {
    header("Location: admin.php");
} else {
    echo "Error al insertar: " . mysqli_error($conn);
}
?>
