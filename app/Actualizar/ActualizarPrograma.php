<?php
require_once "../../util/Conexion.php";

$id_programa = $_POST['idu'];
$denominacion = $_POST['denominacionu'];
$duracion = $_POST['meses_lectivau'];
$id_formacion = $_POST['id_formacionu'];
$id_tipo = $_POST['id_tipou'];


$query = "UPDATE programa set denominacion = '$denominacion', id_duracion='$duracion', id_formacion= '$id_formacion', id_tipo='$id_tipo' WHERE id_programa='$id_programa'";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>