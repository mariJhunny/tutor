<?php include_once 'includes/templates/header.php'; ?>
<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:index.php"); 
    }
?>
<?php
  $nota=0;
  $preg2="";
  $preg4="";
  if(isset($_POST['submit'])){

    $preg1 =$_POST['preg1'];
    $preg3 =$_POST['preg3'];
    if($preg1=='16'){
      $nota=$nota + 25;
    }else{
      $nota=$nota;
    }
    if($preg3==42){
      $nota=$nota + 25;
    }else{
      $nota=$nota;
    }
    if(isset($_POST['preg2'])){
      $preg2=$_POST['preg2'];
      if($preg2 == 'bien'){
        $nota=$nota + 25;
      }else{
        $nota=$nota;
      }
    }else{
      $preg2="";
    }
    if(isset($_POST['preg4'])){
      $preg4=$_POST['preg4'];
      if($preg4 == 'bien'){
        $nota=$nota + 25;
       /* echo "<h2>Tu 4: {$preg4}</h2>";
        echo "<h2>Tu nota preg4: {$nota}</h2>";*/
        //echo '<script> alert ("'.'4 . . . Tu nota es: '.$nota.'");</script>';
      }else{
        $nota=$nota;
      }
    }else{
      $preg4="";
    }
    //echo "<h2>Tu nota es: {$nota}</h2>";
    if($nota==100){
    echo '<script> alert ("'.'Muy bien . . . Tu nota es: '.$nota.'"); window.location.href="notas.php";</script>';
    }
    if($nota==75){
        echo '<script> alert ("'.'Bien . . . Tu nota es: '.$nota.'"); window.location.href="notas.php";</script>';
    }
    if($nota<=50){
        echo '<script> alert ("'.'Sigue repasando . . . Tu nota es: '.$nota.'"); window.location.href="notas.php";</script>';
    }
    $nombre=$_SESSION["usuario"];
    require_once('includes/funciones/bd_conexion.php');
    $stmt = $conn->prepare("INSERT INTO evaluaciones(idestudiante, idtema, nota) VALUES(?,1,?)");
    $stmt->bind_param("ii", $nombre, $nota);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
  }
?>

<section class="programa">
    <div class="contenedor-contenidoexamen2">
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
        <h2>Multiplicación con uno y dos dígitos</h2>
            <div class="programa-matematica">
            <form id="registro" class="registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
 
                <div id="datos_usuario" class="registro caja clearfix">
                     <div class="campo">
                     <label for="preg1"><h3>¿Cuanto es 4 X 4?</h3></label>
                        <input type="number" id="preg1" name="preg1" placeholder="Escribe la respuesta aquí" min="0" max="99" value="<?php if(isset($preg1)) echo $preg1?>">
                     </div><br>
                    <div class="radio">
                        <h3>¿Cuanto es 8 X 9? (Selecciona una respuesta)</h3>
                        <input type="radio" id="70" name="preg2" value="mal1" <?php if($preg2=="mal1") echo "checked";?>>
                        <label for="70">70</label>
                        <input type="radio" id="72" name="preg2" value="bien" <?php if($preg2=="bien") echo "checked";?>>
                        <label for="72">72</label>
                        <input type="radio" id="73"name="preg2" value="mal" <?php if($preg2=="mal") echo "checked";?>>
                        <label for="73">73</label>
                    </div>
                    <div class="campo">
                        <label for="preg3"><h3>¿Cuanto es 6 X 7?</h3></label>
                        <input type="number" name="preg3" placeholder="Escribe la respuesta aquí" min="0" max="99" value="<?php if(isset($preg3)) echo $preg3?>">
                    </div><br>
                    <div class="radio">
                         <h3>¿Cuanto es 3 X 5? (Selecciona una respuesta)</h3>  
                        <input type="radio" id="15" name="preg4" value="bien" <?php if($preg4=="bien") echo "checked";?>>
                        <label for="15">15</label>
                        <input type="radio" id="18" name="preg4" value="mal1" <?php if($preg4=="mal1") echo "checked";?>>
                        <label for="18">18</label>
                        <input type="radio" id="20" name="preg4" value="mal" <?php if($preg4=="mal") echo "checked";?>>
                        <label for="20">20</label>
                    </div>
                </div>
                <diiv class="campo enviar">
                <input id="btnregistro" type="submit" name="submit" class="button" value="enviar">
                </div>
            </form>
            </div><!-- programa-matematica-->
        </div><!-- contenedor-->
    </div><!-- contenido-programa-->
</section>
<nav class="footer"><?php include_once 'includes/templates/footer.php'?></nav>
