<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:index.php"); 
    }
?>
<?php include_once 'includes/templates/header.php'; ?>
<body>
    <section class="seccion contenedor">
    <h2>temas división</h2>
        <?php
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM `temas` WHERE tipotema='division'";
                $resultado = $conn->query($sql);
            } catch (Exception $e){
                $error = $e->getMessage();
            }
        ?>
        <section class="temas contenedor seccion">
            <ul class="lista-temas clearfix">
                 <?php while($temas = $resultado->fetch_assoc()){?>
                    <li>
                        <div class="tema">
                            <a href="tema.php?idtema=<?php echo $temas['idtema'];?>" method="POST">
                             <img src="<?php echo $temas['imagentema'] ?>" alt="imagen tema">
                             <p><?php echo $temas['titulo']." "?></p>
                            </a>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </section>
        <?php
        $conn->close();
        ?>
    </section>
</body>