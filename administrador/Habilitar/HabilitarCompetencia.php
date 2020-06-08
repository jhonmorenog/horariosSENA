<?php
require_once "../../utili/Conexion.php";

$id_competencia = $_POST['idh'];

$query = "UPDATE competencia set  estado = 0 WHERE id_competencia=$id_competencia";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../competencias.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 