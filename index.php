<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      
      <button class="botoncito"><a href="agregar.php">Agregar Nuevo Usuario</a></button>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id Empleado</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Codigo Rol</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          
          $query = "SELECT * FROM tbl_empleado";
          $resultado = mysqli_query($conn, $query);    

          while($fila = mysqli_fetch_assoc($resultado)) { ?>
          <tr>
            <td><?php echo $fila['id_empleado']; ?></td>
            <td><?php echo $fila['nom_empleado']; ?></td>
            <td><?php echo $fila['nom_rol']; ?></td>
            <td><?php echo $fila['telefono_empleado']; ?></td>
            <td><?php echo $fila['estado']; ?></td>
            <td><?php echo $fila['usuarionom']; ?></td>
            <td><?php echo $fila['contraseña']; ?></td>
            <td><?php echo $fila['copia_codigo_rol']; ?></td>
            <td>
              <a href="editar.php?codigo=<?php echo $fila['id_empleado']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?codigo=<?php echo $fila['id_empleado']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
