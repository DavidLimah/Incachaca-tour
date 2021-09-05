<?php
$title = "Reservas - Editar";
include('header.php');
$user = $_SESSION['user'];
if (isset($_POST['update']) and !empty($_POST['update'])) {
   $ret_val = $obj->updateUser();
   if ($ret_val == 1) {
      echo '<script type="text/javascript">';
      echo 'alert("Registro actualizado correctamente");';
      echo 'window.location.href = "reserva.php";';
      echo '</script>';
   }
}
?>
<main class="container-fluid contenido-principal">
   <h3>Actualizar datos cliente</h3>
   <a href="reserva.php" class="btn" style='color:dodgerblue;'>Volver</a>
   <br>
   <div class="panel panel-primary">
      <form class="form-horizontal" method="post">
         <div class="panel-body">
            <div class="form-group">
               <label class="control-label col-sm-2">Nombre:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value="<?= $user->nombre ?>" type="text" name="nombre" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Correo electrónico:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value="<?= $user->correo_e ?>" type="email" name="correo_e" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Celular:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value="<?= $user->celular ?>" type="number" name="celular" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Dirección:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <textarea rows="1" cols="5" class="form-control" name="direccion" required><?= $user->direccion ?></textarea>
               </div>
               <input type="hidden" value="<?= $user->id ?>" name="id">
            </div>
            <div class="form-group">
               <div class="col-sm-5">
                  <input type="submit" class="btn" name="update" value="Actualizar" style="color: dodgerblue;">
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
<?php include('footer.php'); ?>
