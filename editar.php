<?php
include("connection.php");
$con = mysqli_connect("localhost", "dev_user", "administrador123", "superpapeleriatony_equipo_15");

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE ID = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="crud-container" style="justify-content: center; margin-top: 50px;">
        <div class="form-side card">
            <h3 class="text-blue">Editar Artículo</h3>
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID'] ?>">
                
                <input type="text" name="producto" value="<?= $row['Producto'] ?>" required>
                <input type="number" step="0.01" name="precio" value="<?= $row['Precio'] ?>" required>
                <input type="number" name="stock" value="<?= $row['Stock'] ?>" required>
                <input type="submit" value="Actualizar Cambios" class="btn btn-green">
            </form>
        </div>
    </div>
</body>
</html>
