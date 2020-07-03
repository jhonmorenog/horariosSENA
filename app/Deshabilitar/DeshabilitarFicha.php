<?php
require_once "../../util/Conexion.php";

$numero_ficha = $_POST['idd'];

$query = "UPDATE ficha set  estado = 1 WHERE numero_ficha=$numero_ficha";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>