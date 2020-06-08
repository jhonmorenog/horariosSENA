<?php
require_once "../../utili/Conexion.php";

$id_centro = $_POST['idd'];

$query = "UPDATE centro set  estado = 1 WHERE id_centro=$id_centro";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../centros.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>