<?php 
require_once "../../util/Conexion.php";
$denominacion=$_POST['denominacion'];
$id_competencia=$_POST['id_competencia'];


$found=false;
$sql1="select * from resultado where denominacion_resultado=\"$_POST[denominacion]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"El resultado ya esta registrado.\");window.location='../sentime.php';</script>";
}
}
$query="INSERT INTO resultado (denominacion_resultado,id_competencia) VALUES ('$denominacion','$id_competencia')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>