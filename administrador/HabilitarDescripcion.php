<?php
require_once "../utili/Conexion.php";

$id_descripcion = $_POST['idh'];

$query = "UPDATE descripcion_aula set  estado = 0 WHERE id_descripcion=$id_descripcion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='descripciones.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>
 