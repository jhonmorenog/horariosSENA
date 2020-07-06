<?php
require_once "../../util/Conexion.php";

$numero_ficha = $_POST['idh'];

$query = "UPDATE ficha set  estado = 0 WHERE numero_ficha=$numero_ficha";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 