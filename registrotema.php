<?php include_once 'includes/templates/header-admin.php'?>
<link rel="stylesheet" href="css/main.css"><br><br><br><br>
<div class="container py-4 text-center contenedor-contenidoregt">
        <div class="contenedor">
            <div class="programa-matematica">
            <h2>Registro nuevo tema</h2>
            <form id="registro" class="registro" action="validar-tema.php" method="post" enctype="multipart/form-data">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                        <label for="">Tipo:</label>
                        <select type="text" id="tipo" name="tipotema">
                        <option value="multiplicación" name="tipotema">Multiplicación</option>
                        <option value="división" name="tipotema">División</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="titulotema">Titulo:</label>
                        <input type="text" id="apellidop" name="titulotema" placeholder="Escribe el titulo del tema">
                    </div>
                    <div class="campo">
                        <label for="archivo">Contenido del tema:</label>
                        <input type="file" id="apellidom" name="archivo">
                    </div>
                    <div class="campo enviar">
                        <input id="btnregistro" type="submit" name="submit" class="button" value="registro">
                    </div>
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
    <?php include_once 'includes/templates/footer-admin.php'?>