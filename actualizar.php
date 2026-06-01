<?php
include("config.php");

try {
    // Recibimos los datos editados del formulario
    $id = $_POST['ID'];
    $nombre = $_POST['Producto'];
    $precio = $_POST['Precio'];
    $stock = $_POST['Stock'];

    // Ejecutamos la sentencia UPDATE de SQL
    // NOTA: Envolvimos $precio, $stock y $id en comillas simples para proteger la sintaxis
    $sql = "UPDATE productos SET Producto='$nombre', Precio='$precio', Stock='$stock' WHERE ID='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php"); 
        exit(); // Siempre es buena práctica poner exit() después de un header
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conn);
    }
    
} catch (Throwable $e) {
    // ¡Esto atrapa el Error 500 y te dice qué lo causó!
    echo "<div style='font-family: sans-serif; padding: 20px; text-align: center;'>";
    echo "<h2 style='color: red;'>Error Fatal Capturado</h2>";
    echo "<p><strong>Motivo:</strong> " . $e->getMessage() . "</p>";
    echo "</div>";
}
?>