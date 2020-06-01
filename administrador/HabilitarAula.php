<?php
require_once "conexion/Conexion.php";

$id_aula = $_POST['idh'];


$query = "UPDATE aula set  estado_aula = 0 WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='aulas.php';</script>";
}else {
	echo "Ocurrio un error";
} 
?>
 