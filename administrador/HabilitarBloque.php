<?php
require_once "../utili/Conexion.php";

$dia = $_POST['idh'];

$query = "UPDATE bloque set  estado = 0 WHERE dia=$dia";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='bloques.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>
 