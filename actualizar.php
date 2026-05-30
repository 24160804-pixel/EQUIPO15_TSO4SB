<?php
include("config.php");

// Recibimos los datos editados del formulario
$id = $_POST['ID'];
$nombre = $_POST['Producto'];
$precio = $_POST['Precio'];
$stock = $_POST['Stock'];

// Ejecutamos la sentencia UPDATE de SQL
$sql = "UPDATE productos SET Producto='$nombre', Precio=$precio, Stock=$stock WHERE ID=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: admin.php"); // Regresar a la tabla si todo salió bien
} else {
    echo "Error al actualizar el registro: " . mysqli_error($conn);
}
?>
