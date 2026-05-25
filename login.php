<?php
session_start(); // Inicia la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe las variables del formulario
    $email = $_POST['correo'];
    $pass = $_POST['password'];

    // 1. Administrador
    if ($email == "24160808@itoaxaca.edu.mx" && $pass == "24160808ITO") {
        $_SESSION['usuario'] = $email;
        $_SESSION['rol'] = 'admin';
        header("Location: admin.php");
        exit();
    } 
    // 2. Espectador
    else if ($email == "espectador@itoaxaca.edu.mx" && $pass == "espectador123") {
        $_SESSION['usuario'] = $email;
        $_SESSION['rol'] = 'espectador';
        header("Location: admin.php");
        exit();
    } 
    else {
        $error = "Credenciales incorrectas. <a href='login.php'>Volver</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Administrativo - TONY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="login-container">
        <div class="card login-card">
            <h2 class="text-blue">Panel de Gestión</h2>
            <form action="login.php" method="POST">
                <input type="email" name="correo" placeholder="tunumcontrol@itoaxaca.edu.mx" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Entrar" class="btn btn-blue">
            </form>
            <?php if($error != ""): ?>
                <p class="error-msg"><?= $error ?></p>
            <?php endif; ?>
            <br>
            <a href="index.php" style="font-size: 0.8rem;">Volver al inicio</a>
        </div>
    </div>
</body>
</html>