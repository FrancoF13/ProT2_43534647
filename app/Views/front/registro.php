<!-----------------------------COMIENZO DEL REGISTRO---------------------------->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Registro de Usuario</h2>
            <form action="registro.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control mt-4" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control mt-4" id="apellido" name="apellido" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control mt-4" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control mt-4" id="usuario" name="usuario" required>
                </div>

                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" class="form-control mt-4" id="contraseña" name="contraseña" required>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!------------------------FIN DEL FORMULARIO-------------------------------->

<!-------------------------DISEÑO DEL REGISTRO-------------------------------->
<style>
    body {
        background-color: rgba(30, 49, 78, 0.4);
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Estilos adicionales para los campos de entrada */
    .form-control {
        margin-top: 10px;
    }

    /* Estilo para los botones */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    #verContrasena {
    background-color: #0074D9;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

</style>
