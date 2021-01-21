<?php include_once 'includes/templates/header-index.php'; ?>
<section class="programa">
    <div class="contenedor-contenidoregistro">
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-matematica">
            <h2>Registro de Usuario</h2>
            <form id="registro" class="registro" action="validar-registro.php" method="post">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="apellidop">Apellido Paterno:</label>
                        <input type="text" id="apellidop" name="apellidop" placeholder="Tu Apellido Paterno">
                    </div>
                    <div class="campo">
                        <label for="apellidom">Apellido Materno:</label>
                        <input type="text" id="apellidom" name="apellidom" placeholder="Tu Apellido Materno">
                    </div>
                    <div class="campo">
                        <label for="edad">Edad:</label>
                        <input type="number" min="5" max="99" id="edad" name="edad" placeholder="0" size="3">
                    </div>
                    <div class="campo enviar">
                        <input id="btnregistro" type="submit" name="submit" class="button" value="registro">
                    </div>
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
</section>
<?php include_once 'includes/templates/footer.php'; ?>