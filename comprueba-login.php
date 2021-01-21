<?php
try{
    $base=new PDO("mysql:host=localhost; dbname=tutorinteligente", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM estudiante where nombre=:nom and apellidop=:ape";
    $resultado=$base->prepare($sql);
    $nom=htmlentities(addslashes($_POST["nombre"]));
    $ape=htmlentities(addslashes($_POST["apellidop"]));
    $resultado->bindValue(":nom", $nom);
    $resultado->bindValue(":ape", $ape);
    $resultado->execute();
    $datosusuario=$resultado->fetch(PDO::FETCH_ASSOC);
    $iddato=$datosusuario['idestudiante'];
    $iddato22=$datosusuario['idusuario'];
    $iddatonombre=$datosusuario['nombre'];
    //print_r ($datosusuario);
    $num_registro=$resultado->rowCount();
    if($num_registro!=0){
        session_start();
        $_SESSION["usuario"]=$iddato;//recupero el id del estudiante
            if($iddato22=="2"){
             echo '<script> alert ("'.'Bienvenido '.$iddatonombre.'"); window.location.href="tipotema.php";</script>';
            }
            if($iddato22==1){
                header("location: estudiantes-registrados.php");
            }
    }else{
        echo '<script> alert ("Datos no encontrados"); window.location.href="login.php";</script>';
    }
}catch(Exception $e){
    die("Error: ".$e->getMessage());
}
?>