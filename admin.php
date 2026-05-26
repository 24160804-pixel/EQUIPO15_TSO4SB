<?php
include("connection.php");
$con = connection();
$sql = "SELECT * FROM articulos";
$query = mysqli_query($con, $sql);

// Consulta los artículos
// $result = mysqli_query($conn, "SELECT * FROM articulos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Inventario - TONY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Panel de <span class="text-green">Inventario</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Ver Sitio Público</a></li>
            <li><a href="login.php" class="text-pink">Cerrar Sesión</a></li>
        </ul>
    </nav>

    <section class="crud-section">
        <div class="crud-container">
            <div class="form-side card">
                <h3 class="text-blue">Registrar Artículo</h3>
                <form action="insertar.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="number" name="precio" placeholder="Precio" required>
                    <input type="number" name="stock" placeholder="Stock" required>
                    <input type="submit" value="Guardar en Inventario" class="btn btn-green">
                </form>
            </div>

            <div class="table-side card">
                <table class="tony-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)): ?>
                            <tr>
                                <td><?= $row['id_articulo'] ?></td>
                                <td><?= $row['nombre'] ?></td>
                                <td>$<?= $row['precio'] ?></td>
                                <td><?= $row['stock'] ?></td>
                                <td class="actions">
                                    <a href="editar.php?id=<?= $row['id_articulo'] ?>" class="btn-sm btn-blue">Editar</a>
                                    <a href="eliminar.php?id=<?= $row['id_articulo'] ?>" class="btn-sm btn-pink">Eliminar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>