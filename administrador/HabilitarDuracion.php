<?php
require_once "conexion/Conexion.php";

$id_duracion = $_POST['idh'];

$query = "UPDATE duracion set  estado = 0 WHERE id_duracion=$id_duracion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='duraciones.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>
 