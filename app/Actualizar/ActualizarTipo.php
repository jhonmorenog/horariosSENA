<?php
require_once "../../util/Conexion.php";

$id_tipo = $_POST['idu'];
$tipo = $_POST['tipou'];



$query = "UPDATE tipo set  tipo = '$tipo' WHERE id_tipo=$id_tipo";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>