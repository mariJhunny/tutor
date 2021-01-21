<?php if(isset($_POST['submit'])):
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $edad = $_POST['edad'];
    try{
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO estudiante(nombre, apellidop, apellidom, edad, idusuario) VALUES(?,?,?,?,2)");
        $stmt->bind_param("sssi", $nombre, $apellidop, $apellidom, $edad);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: validar-registro.php?exitoso=1');
    }catch(Exception $e){
        $error = $e->getMessage();
    }
    ?>
     <?php endif; ?>
<script type="text/javascript">
    alert("Datos registrados exitosamente. . .");
    window.location='login.php';
</script>