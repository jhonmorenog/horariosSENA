<?php
require_once "../../util/Conexion.php";

$id_centro = $_POST['idu'];
$nombre_centro = $_POST['centrou'];



$query = "UPDATE centro set  nombre_centro = '$nombre_centro' WHERE id_centro=$id_centro";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>