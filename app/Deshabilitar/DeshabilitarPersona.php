<?php
require_once "../../util/Conexion.php";

$id_persona = $_POST['idd'];

$query = "UPDATE persona set  estado = 1 WHERE documento=$id_persona";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 