<?php include_once 'includes/templates/header-admin.php'?>
<link rel="stylesheet" href="css/main.css">
<?php
    $consulta=consultarusuario($_GET['idtema']);
    function consultarusuario($idtem){
        include "includes/funciones/bd_conexion.php";
             $sentencia="SELECT * FROM temas WHERE idtema='". $idtem ."'";
             $resultado= $conn->query($sentencia) or die ("Error al cargar tema".mysqli_error($conn));
             $fila=$resultado->fetch_assoc();
             return[
                 $fila['tipotema'],
                 $fila['titulo'],
                 $fila['imagentema']
             ];
    }
?><br><br><br><br>
<div class="container py-4 text-center contenedor-contenidomodt">
        <div class="contenedor">
            <div class="programa-matematica">
            <h2>Modificar tema</h2>
            <form id="form" class="registro" action="validar-modificar-tema.php?idtema=<?php echo $_GET['idtema'];?>" method="post" enctype="multipart/form-data">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                    <label for="tipotema">Tipo:</label>
                        <input type="text" id="tipotema"name="tipotema" value="<?php echo $consulta[0]?>">
                    </div>
                    <div class="campo">
                        <label for="titulotema">Titulo:</label>
                        <input type="text" id="titulo" name="titulotema" value="<?php echo $consulta[1]?>">
                    </div>
                    <div class="campo">
                        <label for="archivo">Contenido del tema:</label>
                        <input type="file" name="archivo" value="<?php echo $consulta[2]?>"">
                    </div>
                    <div class="campo enviar">
                        <input id="btnregistro" type="submit" name="submit" class="button" value="modificar">
                    </div>
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
    <?php include_once 'includes/templates/footer-admin.php'?>