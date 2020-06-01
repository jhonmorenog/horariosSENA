<?php
require_once "conexion/Conexion.php";

$id_resultado = $_POST['idd'];

$query = "UPDATE resultado set  estado = 1 WHERE id_resultado=$id_resultado";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='resultados.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>