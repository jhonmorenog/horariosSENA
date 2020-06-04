<?php
require_once "../utili/Conexion.php";
$nombre_evento=$_POST['nombre'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$found=false;
$sql1="select * from evento where nombre_evento=\"$_POST[nombre]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array())
{
$found=true;
if($found){
	print"<script>alert (\"Evento ya se encuentra registrado.\");
	window.location='informacion.php';</script>";
}
}
$query="INSERT INTO evento (nombre_evento,inicio,fin) values ('$nombre_evento','$inicio','$fin')";
if ($mysqli->query($query)){
	print"<script>alert (\"registro exitoso.\");
	window.location='informacion.php';</script>"; 
}
else {
	echo"OOPS!!!, ocurrió un error.";
}
$mysqli->close();
?>