<?php 
    $var=$_GET['idtema'];
    if($_FILES['archivo']['size']<=3000000){
        if($_FILES['archivo']['type']=="image/jpeg"||$_FILES['archivo']['type']=="image/jpg"||$_FILES['archivo']['type']=="image/png"||$_FILES['archivo']['type']=="image/gif"){
    $temporal =$_FILES['archivo']['tmp_name'];
    $nombre =$_FILES['archivo']['name'];
    move_uploaded_file($temporal, 'imag/'.$nombre);
        }else{
            echo "debe ser una imagen";
        }
    }else{
        echo "Debe ser menor a 3 megas";
    }
    modificarusuario($_GET['idtema'], $_POST['tipotema'], $_POST['titulotema'],$_POST['archivo']);
    function modificarusuario($idtema, $tipote, $titulote, $arch){
    
    echo '<pre>';
    print_r ($_FILES['archivo']);
    echo '</pre>';
    $dir="imag/";
    $tipotem = $_POST['tipotema'];
    $titulotem = $_POST['titulotema'];
    $nombre =$_FILES['archivo']['name'];
    include "includes/funciones/bd_conexion.php";
    echo $sentencia="UPDATE temas SET tipotema='".$tipotem."', titulo='".$titulotem."', imagentema='".$dir.$nombre."' WHERE idtema='". $idtema . "'";
            $conn->query($sentencia) or die ("Error al insertar datos".mysqli_error($conn));
    }
?>
<script type="text/javascript">
    alert("Datos actualizados exitosamente. . .");
    window.location.href='temas-registrados.php';
</script>