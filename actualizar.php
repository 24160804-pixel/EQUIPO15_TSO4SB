<?php
include("config.php");

// Recibimos los datos editados del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

// Ejecutamos la sentencia UPDATE de SQL
$sql = "UPDATE productos SET nombre='$nombre', precio=$precio, stock=$stock WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: admin.php"); // Regresar a la tabla si todo salió bien
} else {
    echo "Error al actualizar el registro: " . mysqli_error($conn);
}
?>
