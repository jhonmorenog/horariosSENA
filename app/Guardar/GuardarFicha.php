<?php 
require_once "../../util/Conexion.php";
$numero_ficha=$_POST['numero_ficha'];
$inicio=$_POST['inicio'];
$final=$_POST['final'];
$found=false;
$query="INSERT INTO ficha (numero_ficha,ingreso,salida) VALUES ('$numero_ficha','$inicio','$final')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>