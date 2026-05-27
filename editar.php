<?php
include("config.php");
// Obtenemos el ID del artículo desde la URL
$id = $_GET['id'];
// Buscamos los datos de ese artículo específico
$result = mysqli_query($conn, "SELECT * FROM productos WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - TONY</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <div class="login-container">
        <div class="card login-card border-blue">
            <h2 class="text-blue">Editar Producto</h2>
            <p style="margin-bottom: 20px; color: #666;">Modifica los valores del artículo seleccionado</p>
            
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">

                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>" required>
                <input type="number" name="precio" placeholder="Precio ($)" value="<?= $row['precio'] ?>" step="0.01" required>
                <input type="number" name="stock" placeholder="Stock" value="<?= $row['stock'] ?>" required>

                <input type="submit" value="Guardar Cambios" class="btn btn-blue">
            </form>
            
            <br>
            <a href="admin.php" style="font-size: 0.9rem; color: var(--tony-blue); text-decoration: none; font-weight: bold;">← Cancelar y volver</a>
        </div>
    </div>
</body>

</html>
