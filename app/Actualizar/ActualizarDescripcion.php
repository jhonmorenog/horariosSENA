<?php
require_once "../../util/Conexion.php";

$id_descripcion= $_POST['idu'];
$descripcion = $_POST['descripcionu'];



$query = "UPDATE descripcion_aula set  descripcion = '$descripcion' WHERE id_descripcion=$id_descripcion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>