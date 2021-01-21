<?php
    eliminarusuario($_GET['idtema']);
    function eliminarusuario($estu){
        include "includes/funciones/bd_conexion.php";
        $sentencia="DELETE FROM temas WHERE idtema='".$estu."'";
        $conn->query($sentencia) or die ("Error al eliminar estudiante".mysqli_error($conn));
    }
?>
<script type="text/javascript">
    alert("Datos eliminados correctamente. . .");
    window.location.href='temas-registrados.php';
</script>