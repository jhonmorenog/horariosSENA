<?php
require_once "../utili/Conexion.php";

$id_resultado = $_POST['idh'];

$query = "UPDATE resultado set  estado = 0 WHERE id_resultado=$id_resultado";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='resultados.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 