<?php
    modificarusuario($_GET['idestudiante'], $_POST['nombre'], $_POST['apellidop'], $_POST['apellidom'], $_POST['edad']);
    function modificarusuario($idestudiante, $nom, $apep, $apem, $eda){
        include "includes/funciones/bd_conexion.php";
            echo $sentencia="UPDATE estudiante SET nombre='".$nom."', apellidop='".$apep."', apellidom='".$apem."', edad='".$eda."' WHERE idestudiante='". $idestudiante . "'";
            $conn->query($sentencia) or die ("Error al modificar datos".mysqli_error($conn));
        }
?>
<script type="text/javascript">
    alert("Datos actualizados exitosamente. . .");
    window.location.href='estudiantes-registrados.php';
</script>