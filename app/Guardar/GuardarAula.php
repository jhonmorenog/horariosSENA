<?php 
require_once "../../util/Conexion.php";
$id=$_POST['id'];
$sede=$_POST['sede'];
$descripcion=$_POST['descripcion'];
$found=false;
$query="INSERT INTO aula (id_aula,id_descripcion,sedeid_sede) VALUES ('$id','$descripcion','$sede')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>