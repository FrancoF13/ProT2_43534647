<!-- Navegacion -->
<nav class="navbar navbar-expand-lg bg-body-blue">
    <div class="container-fluid">
     <div class="navbar-header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
            <!--Logo/marca de la empresa-->
        <img src="<?php echo base_url('assets/img/Logo3.jpeg')?>" alt="marca" width="50" height="50" class="img-fluid">
        </a>
     </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quienes Somos</a></li></li>
            
        <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca De</a></li></li>

        <li class="nav-item">
            <a class="nav-link" href="registro">Registrarse</a></li></li>

        <li class="nav-item">
            <a class="nav-link" href="login">Login</a></li></li>

    </ul>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    <!--Fin de la Navegacion-->
</div>
</nav>

<!-------------------------------ESTILO DEL NAVBAR--------------------------------->

<style>
    .navbar {
            background-color: #011432; /* Color azul oscuro */
        }
        .navbar-nav .nav-link {
            color: #fff; /* Texto en blanco */
        }
        .navbar-toggler-icon {
            background-color: #155724; /* Icono del botón de navegación en verde oscuro */
        }
        .btn-outline-success {
            color: #fff; /* Texto en blanco */
            background-color: #155724; /* Fondo verde oscuro */
            border-color: #155724; /* Borde verde oscuro */
        }
        .btn-outline-success:hover {
            background-color: #0e3c19; /* Fondo verde oscuro al pasar el mouse */
            color: #fff; /* Texto en blanco al pasar el mouse */
        }
        .navbar-brand img {
            border-radius: 50%; /* Redondea los bordes del logo */
        }
</style>

