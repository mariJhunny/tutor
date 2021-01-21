<?php include_once 'includes/templates/header.php'; ?>
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
}
?>
<div class="contenedortabla">
    <div class="tablatitulo">Registro de notas</div>
    <div class="tablaheader">Titulo del tema</div>
    <div class="tablaheader">Nota</div>
    <div class="tablaheader">Observaciones</div>
    <div class="tablaitem">Multiplicación de números naturales</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =1 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    //echo "<div class='tablaitem'>"; echo '$resultado'; echo "</div>";
    while ($fila = $resultado->fetch_assoc()) {
        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "pendiente";
            echo "</div>";
        }
    }
    ?>
    <!--PREGUNTA 2-->
    <div class="tablaitem">Multiplicación con uno y dos dígitos</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =2 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {

        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<a href='examen2.php' style='text-decoration: none'><div class='tablaitem rojo'>";
            echo "pendiente";
            echo "</div></a>";
        }
    }
    ?><!--PREGUNTA 3-->
    <div class="tablaitem">Propiedad conmutativa de la multiplicación</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =3 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {

        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<a href='examen3.php' style='text-decoration: none'><div class='tablaitem rojo'>";
            echo "pendiente";
            echo "</div></a>";
        }
    }
    ?><!--PREGUNTA 4-->
    <div class="tablaitem">División de números naturales</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =4 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {

        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<a href='examen4.php' style='text-decoration: none'><div class='tablaitem rojo'>";
            echo "pendiente";
            echo "</div></a>";
        }
    }
    ?>
    <!--PREGUNTA 5-->
    <div class="tablaitem">Divisiones exactas e inexactas</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =5 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {

        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<a href='examen5.php' style='text-decoration: none'><div class='tablaitem rojo'>";
            echo "pendiente";
            echo "</div></a>";
        }
    }
    ?>
    <!--PREGUNTA 6-->
    <div class="tablaitem">División con ceros (0) en el dividendo y divisor</div>
    <?php
    include "includes/funciones/bd_conexion.php";
    $var = $_SESSION['usuario'];
    $sentencia = "SELECT MAX(nota) FROM `evaluaciones` WHERE idtema =6 and idestudiante=$var";
    $resultado = $conn->query($sentencia) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {

        $nota2 = $fila['MAX(nota)'];
        if ($nota2 == 100) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Excelente, no dejes de practicar.";
            echo "</div>";
        }
        if ($nota2 == 75) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Muy bien, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 <= 50 & $nota2 > 0) {
            echo "<div class='tablaitem'>";
            echo $fila['MAX(nota)']; //NOTA
            echo "</div>";
            echo "<div class='tablaitem'>";
            echo "Puedes hacerlo mejor, sigue practicando.";
            echo "</div>";
        }
        if ($nota2 == 0) {
            echo "<div class='tablaitem'>";
            echo "0";
            echo "</div>";
            echo "<a href='examen6.php' style='text-decoration: none'><div class='tablaitem rojo'>";
            echo "pendiente";
            echo "</div></a>";
        }
    }
    ?>
</div>
<div id="imagen">
<img src="img/niños12345.png" width="100%">
</div>
<!--rango de notas-->
<div class="contenedortabla2">
    <div class="tablatitulo2">Recomendaciones de puntuación</div>
    <div class="tablaheader2">De 0 a 40</div>
    <div class="tablaheader2">De 41 a 60</div>
    <div class="tablaheader2">De 61 a 80</div>
    <div class="tablaheader2">De 81 a 100</div>
    <div class="tablaitem2">No te rindas tu puedes.</div>
    <div class="tablaitem2">Bien, pero puedes hacerlo mejor.</div>
    <div class="tablaitem2">Muy bien, no olvides practicar.</div>
    <div class="tablaitem2">Felicidades, sigue adelante.</div>
</div>