<?php
include("db.php");

if (isset($_POST['guardar'])){
$codemp = $_POST['codemp'];
$nombre = $_POST['Nombre'];
$rol = $_POST['Rol'];
$telefono = $_POST['Telefono'];
$estado = $_POST['Estado'];
$usuario = $_POST['Usuario'];
$contra = $_POST['Contraseña'];
$codrol = $_POST['Codigorol'];
    
  $query = "INSERT INTO tbl_empleado(id_empleado,nom_empleado,nom_rol,telefono_empleado,estado,usuarionom,contraseña,copia_codigo_rol) VALUES('$codemp','$nombre','$rol','$telefono','$estado','$usuario','$contra','$codrol')";
    
  $result = mysqli_query($conn, $query);

  if(!$result){
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha Guardado Correctamente el usuario';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
