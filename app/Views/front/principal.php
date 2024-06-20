<!-- principal.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio - Página Principal</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <!-- Agrega aquí los enlaces a Bootstrap y otros estilos -->
</head>
<body>
    <h1>Bienvenido a Mi Sitio</h1>
    <!-- barra de navegacion -->
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
<!-- Bootstrap -->

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</html>
