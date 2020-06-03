<?php 
require_once "../utili/Conexion.php";
$denominacion=$_POST['denominacion'];
$duracion=$_POST['duracion'];


$found=false;
$sql1="select * from competencia where denominacion=\"$_POST[denominacion]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"La competencia ya esta registrada.\");window.location='informacion.php';</script>";
}
}
$query="INSERT INTO competencia (denominacion,duracion) VALUES ('$denominacion','$duracion')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='competencias.php';</script>";
}else {
	echo "Ocurrio un error";
}
 ?>