<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:index.php"); 
    }
?>
<?php include_once 'includes/templates/header.php'; ?>
<section class="programa">
    <div class="contenedor-contenidotipotema">
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
        <h2>Elige una opción</h2>
        <!--<section class="tipotemas contenedor seccion">-->
            <ul class="lista-tipotemas clearfix">
                    <li>
                        <div class="tipotema">
                            <a href="multiplicacion.php">
                             <img src="img/imamultiplicacion.png ?>" alt="elige multiplicación">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="tipotema">
                            <a href="division.php">
                             <img src="img/imadivision.png ?>" alt="elige división">
                            </a>
                        </div>
                    </li>
            </ul>
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
</section>

    <?php include_once 'includes/templates/footer.php'; ?>