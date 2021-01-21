<?php include_once 'includes/templates/header-index.php'; ?>
<section class="programa">
    <div class="contenedor-contenidologin">
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-matematica">
            <h2>Ingresa Aqui</h2>
            <form id="registro" class="registro" action="comprueba-login.php" method="post">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="apellidop">Apellido Paterno:</label>
                        <input type="text" id="apellidop" name="apellidop" placeholder="Tu Apellido Paterno">
                    </div>
                    <div class="campo enviar">
                        <input id="btnregistro" type="submit" name="submit" class="button" value="ingresar">
                    </div>
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
</section>
<?php include_once 'includes/templates/footer.php'; ?>