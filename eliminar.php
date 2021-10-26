<?php

include("db.php");

if(isset($_GET['codigo'])) {
  $id = $_GET['codigo'];
  $query = "DELETE FROM tbl_empleado WHERE id_empleado = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha Removido correctamente el usuario';
  $_SESSION['message_type'] = 'Peligro';
  header('Location: index.php');
}

?>
