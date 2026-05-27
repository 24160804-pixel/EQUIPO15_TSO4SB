 <?php
session_start();
// Si el usuario NO es admin, no lo dejes hacer nada aquí
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    die("ERROR: No tienes permisos para eliminar registros.");
}
include("config.php");
$id = $_GET['ID'];
$sql = "DELETE FROM productos WHERE ID = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: admin.php");
} else {
    echo "Error al eliminar: " . mysqli_error($conn);
}
?> 
