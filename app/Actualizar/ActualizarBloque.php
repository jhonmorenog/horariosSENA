<?php
require_once "../../util/Conexion.php";

$id_aula = $_POST['aulab'];
$rango = $_POST['rangob'];
$dia = $_POST['diab'];
$trimestre = $_POST['trimestreb'];
$anio = $_POST['aniob'];
$fichab = $_POST['fichab'];
$instructor = $_POST['documentob'];


$query = "UPDATE aula set  id_descripcion = '$id_descripcion', sedeid_sede = '$sedeid_sede' WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>