<?php
require_once "../../util/Conexion.php";

$id_competencia = $_POST['idu'];
$denominacion = $_POST['denominacionu'];
$duracion = $_POST['duracionu'];


$query = "UPDATE competencia set   denominacion= '$denominacion', duracion = '$duracion' WHERE id_competencia=$id_competencia";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>