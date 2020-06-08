<?php
require_once "../../utili/Conexion.php";

$id_formacion = $_POST['idh'];

$query = "UPDATE nivel_formacion set  estado = 0 WHERE id_nivel=$id_formacion";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../formaciones.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>
 