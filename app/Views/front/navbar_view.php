<!-- Navegacion -->
<?php  
$session = session();
$nombre  = $session->get('nombre');
$perfil  = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-blue">
    <div class="container-fluid">
     <div class="navbar-header">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">

            <!--Logo/marca de la empresa-->
        <img src="<?php echo base_url('assets/img/Logo1.jpeg')?>" alt="marca" width="70" height="70" class="img-fluid">
        </a>
     </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN <?php echo session('nombre'); ?> </a>
        </div>
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
    </ul>
</div>
<?php elseif(session()->perfil_id == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
            <a href="">CLIENTE: <?php echo session('nombre');?> </a>
        </div>
<!--NAVBAR PARA CLIENTES que pueden ver ellos-->

<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
        </li>
    </ul>

    <!--BUSCADOR-->
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>

<?php else:?>
<!--NAVBAR PARA CLIENTES no logueados-->
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="registro">Registrarse</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
        </li>
    </ul>    
</div>

<!--BUSCADOR-->
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <?php endif;?>
    </div>
</div>
    <!--Fin de la Navegacion-->
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

