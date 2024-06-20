<!-- quienes_somos.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio - Página Principal</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
</head>
    <!-- Encabezado similar al de principal.php -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Sitio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('principal'); ?>">Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
            </li>
        </ul>
    </div>
</nav>
</body>
    <h1>Quiénes Somos</h1>
    <p>Somos una empresa apasionada por la tecnología...</p>
    <!-- Contenido adicional -->
</body>
</html>
