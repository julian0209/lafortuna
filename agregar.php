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

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="funcionguardar.php" method="POST">
         <div class="form-group">
            <input type="text" name="codemp" class="form-control" placeholder="ID" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
           <div class="form-group">
            <select name="Rol">
               <option value="Gerente General">Gerente General</option> 
               <option value="Gerente De Ventas">Gerente de Ventas</option> 
               <option value="Personal De Ventas">Personal de Ventas</option>
               <option value="Almacenista">Almacenista</option> 
            </select>
           </div>
            <div class="form-group">
            <input type="text" name="Telefono" class="form-control" placeholder="Telefono" autofocus>
          </div>
        <div class="form-group">
            <select name="Estado">
               <option value="Activo">Activo</option> 
               <option value="Inactivo">Inactivo</option> 
            </select>
           </div>
            <div class="form-group">
            <input type="text" name="Usuario" class="form-control" placeholder="Usuario" autofocus>
          </div>
            <div class="form-group">
            <input type="text" name="Contraseña" class="form-control" placeholder="Contraseña" autofocus>
          </div>
            <div class="form-group">
            <input type="text" name="Codigorol" class="form-control" placeholder="Codigo Rol" autofocus>
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar Ingreso">
        </form>
      </div>
    </div>
