<?php
require_once "../../util/Conexion.php";

$id_aula = $_POST['idd'];

$query = "UPDATE aula set  estado = 1 WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 