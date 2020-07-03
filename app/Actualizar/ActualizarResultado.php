<?php
require_once "../../util/Conexion.php";

$id_resultado = $_POST['idu'];
$denominacion = $_POST['denominacionu'];
$competencia = $_POST['id_competenciau'];


$query = "UPDATE resultado set  denominacion_resultado = '$denominacion', id_competencia = '$competencia' WHERE id_resultado='$id_resultado'";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>