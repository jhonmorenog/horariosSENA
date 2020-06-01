<?php
require_once "conexion/Conexion.php";

$id_descripcion = $_POST['idd'];

$query = "UPDATE descripcion_aula set  estado = 1 WHERE id_descripcion=$id_descripcion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='descripciones.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>