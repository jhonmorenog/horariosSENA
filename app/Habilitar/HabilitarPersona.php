<?php
require_once "../../util/Conexion.php";

$id_persona = $_POST['idh'];


$query = "UPDATE persona set  estado = 0 WHERE documento=$id_persona";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
} 
$mysqli->close();
?>
 
