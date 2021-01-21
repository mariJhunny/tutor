<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:index.php"); 
    }
?>
<?php include_once 'includes/templates/header.php'; ?>
<?php
    $consulta=mostrartema($_GET['idtema']);
    
    function mostrartema($idtem){
        include "includes/funciones/bd_conexion.php";
          $sentencia="SELECT * FROM temas WHERE idtema='". $idtem ."'";
           $resultado=$conn->query($sentencia) or die ("Error al modificar datos".mysqli_error($conn));
            $fila=$resultado->fetch_assoc();
            return[
                $fila['titulo'],
                $fila['imagentema']
            ];
        }
?>
<section class="seccion contenedor">
    <h2>
        <?php echo $consulta[0]?>
    </h2>

    <img class="imagen" src="<?php echo $consulta[1] ?>" alt="imagen tema">
</section><!-- contenedor -->

<?php include_once 'includes/templates/footer.php'; ?>