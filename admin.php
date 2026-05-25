<?php
include("config.php");

// Si no hay sesión, regresa al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Consulta los artículos
$result = mysqli_query($conn, "SELECT * FROM articulos");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="insert_artc.php" method="POST">
        <h1>AGREGAR UN ARTÍCULO</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="number" name="precio" placeholder="Precio">
            <input type="number" name="stock" placeholder="Stock">

            <input type="submit" value="Agregar Producto">
        </form>
    </div>

    <div>
        <h2>Articulos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <th><?= $row['id_articulo']   ?></th>
                        <th><?= $row['nombre']   ?></th>
                        <th><?= $row['precio']   ?></th>
                        <th><?= $row['stock']   ?></th>

                        <th><a href="update.php?id=<?= $row['id_articulo']   ?>">Editar</a></th>
                        <th><a href="delete_artcl.php?id=<?= $row['id_articulo']   ?>">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>
</body>

</html>