<?php
require_once "../../util/Conexion.php";

$documento = $_GET['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email= $_POST['email'];
$contrasenia = md5($_POST['clave']);
$query = "UPDATE persona set documento='$documento', nombre = '$nombre', apellido = '$apellido', clave='$contrasenia', email='$email' WHERE documento=$documento";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 