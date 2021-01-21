<?php include_once 'includes/templates/header.php'; ?>
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
}
?>
<!--rango de notas-->
<div class="contenedortabla3">
    <div class="tablatitulo3">Elige una opción para repasar</div>
    <div class="tablaheader3">Empezar</div>
    <div class="tablaitem3"><a href="examen1.php"><img src="img/1.png" width="30%">Multiplicación de números naturales</a></div>
    <div class="tablaitem3"><a href="examen2.php"><img src="img/2.png" width="30%">Multiplicación con uno y dos dígitos</a></div>
    <!--<div class="tablaitem3"><a href="examen2.php"><img src="img/3.png" width="30%">Multiplicación con dos o mas cifras</a></div>-->
    <div class="tablaitem3"><a href="examen3.php"><img src="img/3.png" width="30%">Propiedad conmutativa de la multiplicación</a></div>
    <!--<div class="tablaitem3"><a href="examen6.php"><img src="img/5.png" width="30%">Elemento neutro y absorbente de la multiplicación</a></div>-->
    <div class="tablaitem3"><a href="examen4.php"><img src="img/4.png" width="30%">División de números naturales</a></div>
    <div class="tablaitem3"><a href="examen5.php"><img src="img/5.png" width="30%">Divisiones exactas e inexactas</a></div>
    <div class="tablaitem3"><a href="examen6.php"><img src="img/6.png" width="30%">División con ceros (0) en el dividendo y divisor</a></div>
</div>