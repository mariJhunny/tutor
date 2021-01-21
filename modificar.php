<?php include_once 'includes/templates/header-admin.php'?>
<link rel="stylesheet" href="css/main.css">
<?php
    $consulta=consultarusuario($_GET['idestudiante']);
    function consultarusuario($idest){
        include "includes/funciones/bd_conexion.php";
             $sentencia="SELECT * FROM estudiante WHERE idestudiante='". $idest ."'";
             $resultado= $conn->query($sentencia) or die ("Error al cargar estudiante".mysqli_error($conn));
             $fila=$resultado->fetch_assoc();
             return[
                 $fila['nombre'],
                 $fila['apellidop'],
                 $fila['apellidom'],
                 $fila['edad']
             ];
    }
?>
<div class="container py-4 text-center contenedor-contenidomod" ><br><br><br><br>
        <div class="contenedor">
            <div class="programa-matematica">
            <h2>Modificar Usuario</h2>
            <form id="registro" class="registro" action="validar-modificar.php?idestudiante=<?php echo $_GET['idestudiante'];?>" method="POST">
            <input type="hidden" name="idestudiante">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                        
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $consulta[0]?>">
                    </div>
                    <div class="campo">
                        <label for="apellidop">Apellido Paterno:</label>
                        <input type="text" id="apellidop" name="apellidop" value="<?php echo $consulta[1]?>">
                    </div>
                    <div class="campo">
                        <label for="apellidom">Apellido Materno:</label>
                        <input type="text" id="apellidom" name="apellidom" value="<?php echo $consulta[2]?>">
                    </div>
                    <div class="campo">
                        <label for="edad">Edad:</label>
                        <input type="number" min="5" max="99" id="edad" name="edad" value="<?php echo $consulta[3]?>" size="3">
                    </div>
                    <div class="campo enviar">
                        <input id="btnregistro" type="submit" name="submit" class="button" value="modificar">
                    </div>
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
</div>
<?php include_once 'includes/templates/footer-admin.php'?>