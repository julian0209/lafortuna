<html lang="es">
<?php
$nombre = $_POST['usuario'];
$password = $_POST['pass'];
$conn = new mysqli("localhost","root","","la_fortuna");
if ($conn -> connect_error){
    die ("no se ha establecido conexion con el servidor: " . $conn -> connect_error);
}
$registros = mysqli_query($conn, "SELECT * FROM tbl_empleado WHERE usuarionom = '$nombre' AND contraseña = '$password' AND estado = 'Activo' ");
    if($reg = mysqli_fetch_array($registros)){
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost/LaFortuna/ingreso.html");

}
else {
    echo "<script> alert ('Informacion incorrecta') </script>";
    echo "Usuario Inexistente o Inactivo...";
    echo "Volver a intentar";
?>
<p>
        <br>
        <a href="http://localhost/LaFortuna/login.html"><input type="button" Value="Volver a Intentar"></a>
    </p>
<?php
}
?>



</html>