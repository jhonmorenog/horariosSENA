<?php
require_once "../../util/Conexion.php";

$id_sede = $_POST['idd'];

$query = "UPDATE sede set  estado = 1 WHERE id_sede=$id_sede";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>