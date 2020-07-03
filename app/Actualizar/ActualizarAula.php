<?php
require_once "../../util/Conexion.php";

$id_aula = $_POST['idu'];
$id_descripcion = $_POST['descripcionu'];
$sedeid_sede = $_POST['sedeu'];


$query = "UPDATE aula set  id_descripcion = '$id_descripcion', sedeid_sede = '$sedeid_sede' WHERE id_aula=$id_aula";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 