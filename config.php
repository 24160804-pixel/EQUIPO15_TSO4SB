<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Credenciales por defecto (Administrador)
$db_user = "dev_user";
$db_pass = "administrador123";

// Si el rol es 'espectador', cambiamos a los datos del auditor
if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'espectador') {
    $db_user = "audit_user";
    $db_pass = "auditor123"; // Debe coincidir con la contraseña de MySQL
}

$conn = mysqli_connect("localhost", $db_user, $db_pass, "superpapeleriatony_equipo_15");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
