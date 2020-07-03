<?php
require_once "../../util/Conexion.php";

$id_programa = $_POST['ide'];

$query = "DELETE from programa WHERE id_programa=$id_programa";
if($mysqli->query($query)){
	print"<script>alert(\"Eliminación exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
