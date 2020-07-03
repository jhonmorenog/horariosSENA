<?php 
require_once "../../util/Conexion.php";
$numero_ficha=$_POST['numero_ficha'];
$inicio=$_POST['inicio'];
$final=$_POST['final'];
$jornada=$_POST['jornada'];
$programa=$_POST['programa'];
$found=false;
$query="INSERT INTO ficha (numero_ficha,ingreso,salida,jornada) VALUES ('$numero_ficha','$inicio','$final','$jornada')";
$query2="INSERT INTO programa_ficha values ('$programa','$numero_ficha')";

if($mysqli->query($query) && $mysqli->query($query2)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>