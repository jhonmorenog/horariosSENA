<?php
require_once "conexion/Conexion.php";

$id_competencia = $_POST['idd'];

$query = "UPDATE competencia set  estado = 1 WHERE id_competencia=$id_competencia";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='competencias.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>