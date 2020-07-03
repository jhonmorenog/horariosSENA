<?php
require_once "../../util/Conexion.php";

$id_aula = $_POST['ide'];

$query = "DELETE from aula WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Eliminación exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 