<?php include_once 'includes/templates/header-index.php'; ?>
<section class="programa">
<div class="contenido-programa">
<div class="contenedor">
<div class="programa-matematica">
      <h2>Registrar nuevo tema</h2>
      <form method="post" enctype="multipart/form-data" action="validar-registro-tema.php">
         <div class="campo">
            <label for="">Tipo:</label>
            <select type="text" id="tipo" name="tipotema">
            <option value="multiplicacion" name="tipotema">Multiplicación</option>
            <option value="division" name="tipotema">División</option>
            </select>
         </div>
         
         <div class="campo">
         <br>
            <label for="titulo">Titulo tema:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Ingresa el titulo del tema">
         </div>
         <div class="campo">
         <br>
            <label for="archivo">Contenido:</label>
            <input type="file" name ="archivo"/>                  
         </div>
         <div class="campo enviar">
         <input type="submit" class="button"/>
         </div>
      </form>
   </div>
</div>
</div>
</section>