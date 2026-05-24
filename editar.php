<?php
include("config.php");
// Obtenemos el ID del artículo desde la URL
$id = $_GET['id'];
// Buscamos los datos de ese artículo específico
$result = mysqli_query($conn, "SELECT * FROM articulos WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="es">
<head><title>Editar Artículo - Tony</title></head>
<link rel="stylesheet" href="estilos.css">
<body>
    <h2>Editar Artículo de Papelería</h2>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>
        Precio: <input type="number" step="0.01" name="precio" value="<?php echo $row['precio']; ?>" required><br><br>
        Stock: <input type="number" name="stock" value="<?php echo $row['stock']; ?>" required><br><br>
        
        <button type="submit">Guardar Cambios</button>
        <a href="admin.php">Cancelar</a>
    </form>
</body>
</html>
