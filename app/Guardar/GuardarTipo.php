<?php 
require_once "../../util/Conexion.php";
$tipo=$_POST['tipo'];
$found=false;

$sql1="select * from tipo where tipo=\"$_POST[tipo]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array()) 
{
$found=true;
if($found)
{
print"<script>alert(\"El tipo de formacion ya esta registrado.\");window.location='../sentime.php';</script>";
}
}
$query="INSERT INTO tipo (tipo) VALUES ('$tipo')";

if($mysqli->query($query)){
	print"<script>alert(\"Registro exitoso.\");window.location='../sentime.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
 ?>