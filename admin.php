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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario - Tony Superpapelerías</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <header style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Tony Superpapelerías - Inventario</h2>
            <a href="logout.php" style="color: #d32f2f; text-decoration: none; font-weight: bold;">Cerrar Sesión</a>
        </header>

        <p>Sesión activa: <strong><?php echo $_SESSION['usuario']; ?></strong> | Rol: <strong><?php echo $_SESSION['rol']; ?></strong></p>

        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
            <div style="background: #f9f9f9; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <h3>Añadir Nuevo Producto</h3>
                <form action="insertar.php" method="POST" style="border: none; padding: 0;">
                    <input type="text" name="nombre" placeholder="Producto" required>
                    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
                    <input type="number" name="stock" placeholder="Stock" required>
                    <button type="submit" class="btn btn-add">Guardar Producto</button>
                </form>
            </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
                        <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td>$<?php echo number_format($row['precio'], 2); ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Editar</a>
                        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                    </td>
                    <?php endif; ?>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
