<?php
    eliminarusuario($_GET['idestudiante']);
    function eliminarusuario($estu){
        include "includes/funciones/bd_conexion.php";
        $sentencia="DELETE FROM estudiante WHERE idestudiante='".$estu."'";
        $conn->query($sentencia) or die ("Error al eliminar estudiante".mysqli_error($conn));
    }
?>
<script type="text/javascript">
    alert("Datos eliminados. . .");
    window.location.href='estudiantes-registrados.php';
</script>