<?php
require_once "conexion/Conexion.php";

$documento = $_GET['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasenia = md5($_POST['clave']);



$query = "UPDATE persona set  nombre = '$nombre', apellido = '$apellido', clave='$contrasenia' WHERE documento=$documento";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa. Reinicie su sesión para visualizar los cambios\");window.location='formValidationInstructor.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>
 