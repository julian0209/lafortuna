<?php
include("db.php");

if  (isset($_GET['codigo'])) {
  $codigo = $_GET['codigo'];
  $query = "SELECT * FROM tbl_empleado WHERE id_empleado = $codigo";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['nom_empleado'];
    $rol = $row['nom_rol'];
    $telefono = $row['telefono_empleado'];
    $estado = $row['estado'];
    $user = $row['usuarionom'];
    $contra = $row['contraseña'];
    $coprol = $row['copia_codigo_rol'];
  }
}

if (isset($_POST['actual'])) {
    $codex = $_GET['codigo'];
    $nombre = $_POST['Nombre'];
    $rol = $_POST['Rol'];
    $telefono = $_POST['Telefono'];
    $estado = $_POST['Estado'];
    $usuario = $_POST['Usuario'];
    $contra = $_POST['Contraseña'];
    $codrol = $_POST['Codigorol'];
    
  $query = "UPDATE tbl_empleado SET nom_empleado = '$nombre', nom_rol = '$rol', telefono_empleado = '$telefono', estado = '$estado', contraseña = '$contra', copia_codigo_rol = '$codrol' WHERE id_empleado = '$codex'";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea Actualizada Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Actualizar Nombre">
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
          <input name="Telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar Calidad o Consola">
          </div>
        <div class="form-group">
            <select name="Estado">
               <option value="Activo">Activo</option> 
               <option value="Inactivo">Inactivo</option> 
            </select>
           </div>
        <div class="form-group">
          <input name="Usuario" type="text" class="form-control" value="<?php echo $user; ?>" placeholder="Actualizar Link de Descarga">
        </div>
        <div class="form-group">
          <input name="Contraseña" type="text" class="form-control" value="<?php echo $contra; ?>" placeholder="Actualizar Link de Descarga">
        </div>
        <div class="form-group">
          <input name="Codigorol" type="text" class="form-control" value="<?php echo $coprol; ?>" placeholder="Actualizar Link de Descarga">
        </div>
        <button class="btn-success" name="actual">    
          Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
