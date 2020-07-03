<?php
require_once "../../util/Conexion.php";

$id_formacion = $_POST['idu'];
$denominacion = $_POST['denominacionu'];



$query = "UPDATE nivel_formacion set  denominacion_nivel = '$denominacion' WHERE id_nivel='$id_formacion'";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>