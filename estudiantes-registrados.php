<?php include_once 'includes/templates/header-admin.php'?>
<script type="text/javascript">
    function ConfirmDelete(){
        var respuesta = confirm("¿Estas seguro de Eliminar al Usuario?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
   <h2>Nomina de estudiantes</h2>
            <table class="table" bgcolor="rgba(255,255,255,0.5)">
                <thead>
                    <th>No.</th.>
                    <th>Nombre</th.>
                    <th>Apellido Paterno</th.>
                    <th>Apellido Materno</th.>
                    <th>Edad</th.>
                    
                </thead>
                <?php
                    include "includes/funciones/bd_conexion.php";
                    $sentencia="SELECT * FROM estudiante WHERE idusuario=2";
                    $resultado= $conn->query($sentencia) or die (mysqli_error($conexion));
                    $nu=0;
                    while($fila=$resultado->fetch_assoc()){
                        $nu++;
                        echo "<tr>";
                            echo "<td>"; echo $nu; echo "</td>";
                            echo "<td>"; echo $fila['nombre']; echo "</td>";
                            echo "<td>"; echo $fila['apellidop']; echo "</td>";
                            echo "<td>"; echo $fila['apellidom']; echo "</td>";
                            echo "<td>"; echo $fila['edad']; echo "</td>";
                            echo "<td><a href='modificar.php?idestudiante=".$fila['idestudiante']."'><button type='button' class='btn btn-xl btn-outline-light'><i class='fas fa-pencil-alt'></i></button></a></td>";
                            echo "<td><a href='eliminar.php?idestudiante=".$fila['idestudiante']."'><button type='button' class='btn btn-xl btn-outline-light' onclick='return ConfirmDelete()'><i class='fas fa-trash-alt'></i></button></a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            </div>
        </header>
</section>
<?php include_once 'includes/templates/footer-admin.php'?>