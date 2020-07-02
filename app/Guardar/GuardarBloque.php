<?php 
require_once "../../util/Conexion.php";
$aula=$_POST['aula'];
$rango_horas=$_POST['rango_horas'];
$dia=$_POST['dia'];
$trimestre=$_POST['trimestre'];
$anio=$_POST['anio'];
$ficha=$_POST['ficha'];
$instructor=$_POST['instructor'];
$found=false;
$query="INSERT INTO bloque (dia,trimestre,rango_horas,persona_documento,fichanumero_ficha,aulaid_aula,anio) VALUES ('$dia','$trimestre','$rango_horas','$instructor','$ficha','$aula','$anio')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>