<?php include_once 'includes/templates/header-admin.php'?>
<script type="text/javascript">
    function ConfirmDelete(){
        var respuesta = confirm("¿Estas seguro de Eliminar el tema?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
   <h2>Temas: Multiplicación y División</h2>
            <table class="table" bgcolor="rgba(255,255,255,0.5)">
                <thead>
                    <th>No.</th.>
                    <th>Tipo</th.>
                    <th>Titulo</th.>
                    <th>Contenido</th.>
                    <th></th.>
                    <th><a href="registrotema.php"><button type="button" class="btn btn-xl btn-outline-light">Nuevo</button></a></th>
                </thead>
                <?php
                    include "includes/funciones/bd_conexion.php";
                    $sentencia="SELECT * FROM temas";
                    $resultado= $conn->query($sentencia) or die (mysqli_error($conexion));
                    $nu=0;
                    while($fila=$resultado->fetch_assoc()){
                        $nu++;
                        echo "<tr>";
                            echo "<td>"; echo $nu; echo "</td>";
                            echo "<td>"; echo $fila['tipotema']; echo "</td>";
                            echo "<td>"; echo $fila['titulo']; echo "</td>";
                            echo "<td>"; echo $fila['imagentema']; echo "</td>";
                            echo "<td><a href='modificartema.php?idtema=".$fila['idtema']."'><button type='button' class='btn btn-xl btn-outline-light'><i class='fas fa-pencil-alt'></i></button></a></td>";
                            echo "<td><a href='eliminar-tema.php?idtema=".$fila['idtema']."'><button type='button' class='btn btn-xl btn-outline-light' onclick='return ConfirmDelete()'><i class='fas fa-trash-alt'></i></button></a></td>";
                            echo "<td><a href='tema.php?idtema=".$fila['idtema']."'><button type='button' class='btn btn-xl btn-outline-light'><i class='fas fa-eye'></i></button></a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            </div>
        </header>
</section>
<?php include_once 'includes/templates/footer-admin.php'?>