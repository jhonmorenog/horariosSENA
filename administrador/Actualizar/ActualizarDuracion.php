<?php
require_once "../../utili/Conexion.php";

$id_duracion= $_POST['idu'];
$lectiva = $_POST['lectivau'];


$query = "UPDATE duracion set  meses_lectiva = '$lectiva' WHERE id_duracion='$id_duracion'";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../duraciones.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>