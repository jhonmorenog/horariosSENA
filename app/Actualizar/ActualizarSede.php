<?php
require_once "../../util/Conexion.php";
if(isset($_POST['actualizar'])){
$id_sede = $_POST['idu'];
$direccion = $_POST['direccionu'];
$nombre = $_POST['nombreu'];
$centro = $_POST['centrou'];


$query = "UPDATE sede set  direccion = '$direccion', centroid_centro='$centro', nombre='$nombre' WHERE id_sede=$id_sede";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
}
else {
	echo "Error";
        
}
$mysqli->close();
?>