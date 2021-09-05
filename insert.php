<?php
$title = "Reservas - Agregar";
include('header.php');
if (isset($_POST['submit']) and !empty($_POST['submit'])) {
   $ret_val = $obj->createUser();
   if ($ret_val == 1) {
      echo '<script type="text/javascript">';
      echo 'alert("Registro guardado exitosamente");';
      echo 'window.location.href = "reserva.php";';
      echo '</script>';
   }
}
?>
<div class="container-fluid contenido-principal">
   <h3>Agregar nuevo cliente</h3>
   <a href="reserva.php" class="btn" style='color:dodgerblue;'>Volver</a>
   <br>

   <div class="panel panel-primary">
      <form class="form-horizontal" method="post">
         <div class="panel-body">

            <div class="form-group">
               <label class="control-label col-sm-2">Nombre:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="nombre" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Correo:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="email" name="correo_e" required>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-2">Celular:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="celular" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Dirección:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <textarea rows="1" cols="5" class="form-control" name="direccion" required></textarea>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-5">
                  <input type="submit" class="btn" name="submit" value="Guardar" style="color:dodgerblue;">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<?php include('footer.php'); ?>
