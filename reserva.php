<?php
$title = "Reservas";
include('header.php');
$users = $obj->getUsers();
$sn = 1;
if (isset($_POST['update'])) {
  $user = $obj->getUserById();
  $_SESSION['user'] = pg_fetch_object($user);
  header('location:edit.php');
}
if (isset($_POST['delete'])) {
  $ret_val = $obj->deleteuser();
  if ($ret_val == 1) {

    echo "<script language='javascript'>";
    echo "alert('Registro borrado exitosamente'){
          window.location.reload();
      }";
    echo "</script>";
  }
}
?>

    <!-- Contenido principal -->
    <main class="row contenido-principal">

      <div class="col-md-12 col-sm-12" style="padding: 20px;">
        <h3>Reserva clientes</h3>
        <a href="insert.php" style='margin-top:-30px'> Agregar</a>
        <br>
        <table class="table table-responsive">
          <thead>
            <tr class="active">
              <th>No.</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Dirección</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($user = pg_fetch_object($users)) : ?>
              <tr>
                <td><?= $sn++ ?></td>
                <td><?= $user->nombre ?></td>
                <td><?= $user->correo_e ?></td>
                <td><?= $user->celular ?></td>
                <td><?= $user->direccion ?></td>
                <td>
                  <form method="post">
                    <input type="submit" class="btn" name="update" value="Editar" style="color: dodgerblue;">
                    <input type="submit" onClick="return confirm('Confirmar que desea eliminar');" class="btn" name="delete" value="Eliminar" style="color: dodgerblue;">
                    <input type="hidden" value="<?= $user->id ?>" name="id">
                  </form>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      
    </main>
    <!-- Contenido principal -->

<?php include('footer.php'); ?>