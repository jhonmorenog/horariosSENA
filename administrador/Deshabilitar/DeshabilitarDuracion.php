<?php
require_once "../../utili/Conexion.php";

$id_duracion = $_POST['idd'];

$query = "UPDATE duracion set  estado = 1 WHERE id_duracion=$id_duracion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../duraciones.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>