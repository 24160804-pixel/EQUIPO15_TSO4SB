<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Papelerías TONY - Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Papelerías <span class="text-green">TONY</span></div>
        <ul class="nav-links">
            <li><a href="#mision">Misión y Visión</a></li>
            <li><a href="#valores">Valores</a></li>
            <li><a href="login.php" class="btn-sm btn-blue">Iniciar Sesión</a></li>
        </ul>
    </nav>

    <header class="hero">
        <h1>Bienvenido a Papelerías TONY</h1>
        <p>Todo lo que necesitas para tu oficina y escuela en un solo lugar.</p>
    </header>

    <section id="mision" class="mv-section">
        <div class="mv-container">
            <div class="card border-blue">
                <h3 class="text-blue">Nuestra Misión</h3>
                <p>Ofrecer el surtido más amplio de artículos de papelería con la mejor calidad y precio del mercado.</p>
            </div>
            <div class="card border-green">
                <h3 class="text-green">Nuestra Visión</h3>
                <p>Ser la cadena líder en soluciones escolares y de oficina en todo el país para el año 2030.</p>
            </div>
        </div>
    </section>

    <section id="valores" class="values-section bg-light">
        <h2 class="section-title text-blue">Nuestros Valores</h2>
        <div class="crud-container" style="justify-content: center; gap: 20px;">
            <div class="card"><strong>Honestidad</strong></div>
            <div class="card"><strong>Servicio</strong></div>
            <div class="card"><strong>Innovación</strong></div>
            <div class="card"><strong>Compromiso</strong></div>
        </div>
    </section>
    <section id="nuevo-apartado" class="mv-section">
        <h2 class="section-title text-blue" style="text-align: center;">Nuestros Productos Destacados</h2>
        
        <div class="mv-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 30px;">
            
            <div class="card border-blue" style="width: 280px; text-align: center; padding: 20px;">
                <img src="imagenes/hojas.png" alt="Cuadernos" style="width: 100%; border-radius: 8px; margin-bottom: 15px;">
                <h3 class="text-blue">Regreso a Clases</h3>
                <p>Encuentra los mejores cuadernos, mochilas y útiles escolares al mejor precio.</p>
                <a href="#" class="btn-sm btn-blue" style="display: inline-block; margin-top: 15px;">Ver Ofertas</a>
            </div>

            <div class="card border-green" style="width: 280px; text-align: center; padding: 20px;">
                <img src="imagenes/laptop.png" alt="Oficina" style="width: 100%; border-radius: 8px; margin-bottom: 15px;">
                <h3 class="text-green">Mobiliario de Oficina</h3>
                <p>Sillas ergonómicas, escritorios y todo lo necesario para tu espacio de trabajo.</p>
                <a href="#" class="btn-sm btn-blue" style="display: inline-block; margin-top: 15px;">Ver Catálogo</a>
            </div>

            <div class="card border-blue" style="width: 280px; text-align: center; padding: 20px;">
                <img src="imagenes/cuaderno.png" alt="Arte y Dibujo" style="width: 100%; border-radius: 8px; margin-bottom: 15px;">
                <h3 class="text-blue">Arte y Creatividad</h3>
                <p>Pinturas, pinceles, lienzos y materiales profesionales para artistas.</p>
                <a href="#" class="btn-sm btn-blue" style="display: inline-block; margin-top: 15px;">Descubrir más</a>
            </div>

        </div>
    </section>

    <footer>
        <p>&copy; 2026 Papelerías TONY. Todos los derechos reservados.</p>
    </footer>
</body>
</html>