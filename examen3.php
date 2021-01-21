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
    <div class="contenedor-contenidoexamen3">
    </div>
    <div class="contenido-programa">
        <div class="contenedor">
        <h2>Propiedad conmutativa de la multiplicación</h2>
            <div class="programa-matematica">
            <form id="registro" class="registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
 
                <div id="datos_usuario" class="registro caja clearfix">
                <div class="radio"><br>
                        <h3>¿El producto de 5X3 es igual al producto de 3X5?</h3>
                        <input type="radio" id="70" name="preg2" value="mal1" <?php if($preg2=="mal1") echo "checked";?>>
                        <label for="70">S i</label>
                        <input type="radio" id="72" name="preg2" value="bien" <?php if($preg2=="bien") echo "checked";?>>
                        <label for="72">N o</label>
                    </div>
                     <div class="campo">
                     <label for="preg1"><h3>¿Cuánto es el producto de 15X3 y 3x15?</h3></label>
                        <input type="number" id="preg1" name="preg1" placeholder="Escribe la respuesta aquí" min="0" max="99" value="<?php if(isset($preg1)) echo $preg1?>">
                     </div>
                     <div class="radio"><br>
                        <h3>¿El producto de 11X6 es igual al producto de 6X12?</h3>
                        <input type="radio" id="70" name="preg2" value="mal1" <?php if($preg2=="mal1") echo "checked";?>>
                        <label for="70">S i</label>
                        <input type="radio" id="72" name="preg2" value="bien" <?php if($preg2=="bien") echo "checked";?>>
                        <label for="72">N o</label>
                    </div><br>
                    <div class="checkbox">
                         <h3>¿El producto es igual a 110, cuál es el multiplicando y el multiplicador?</h3>  
                        <input type="checkbox" id="15" name="preg4" value="bien" <?php if($preg4=="bien") echo "checked";?>>
                        <label for="15">22X3</label>
                        <input type="checkbox" id="18" name="preg4" value="mal1" <?php if($preg4=="mal1") echo "checked";?>>
                        <label for="18">4X21</label>
                        <input type="checkbox" id="20" name="preg4" value="mal" <?php if($preg4=="mal") echo "checked";?>>
                        <label for="20">3X22</label>
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
