<?php
require_once "../../util/Conexion.php";

$id_ficha = $_POST['numero_fichau'];
$inicio = $_POST['iniciou'];
$final= $_POST['finalu'];
$programa= $_POST['programau'];
$jornada= $_POST['jornadau'];

$query = "UPDATE ficha set   ingreso = '$inicio', salida = '$final', jornada = '$jornada' WHERE numero_ficha=$id_ficha";
$query2 = "UPDATE programa_ficha set id_programa = '$programa'  WHERE fichanumero_ficha=$id_ficha";

if($mysqli->query($query) && $mysqli->query($query2)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>