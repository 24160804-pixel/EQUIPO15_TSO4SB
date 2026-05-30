<?php
include("connection.php");
$con = mysqli_connect("localhost", "dev_user", "administrador123", "superpapeleriatony_equipo_15");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Recuerda que la columna de la llave primaria se llama ID en mayúsculas
    $sql = "DELETE FROM productos WHERE ID = '$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: admin.php");
    } else {
        echo "Error al eliminar: " . mysqli_error($con);
    }
}
?>
