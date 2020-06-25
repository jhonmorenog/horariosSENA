<?php
require_once "../../utili/Conexion.php";
$lectiva=$_POST['lectiva'];
$found=false;
$sql1="select * from duracion where meses_lectiva=\"$_POST[lectiva]\"";
$query=$mysqli->query($sql1);
while ($r=$query->fetch_array())
{
$found=true;
if($found){
	print"<script>alert (\"Duración de etapa práctica y etapa lectiva ya registradas.\");
	window.location='../duraciones.php';</script>";
}
}
$query="INSERT INTO duracion (meses_lectiva) values ('$lectiva')";
if ($mysqli->query($query)){
	print"<script>alert (\"registro exitoso.\");
	window.location='../duraciones.php';</script>"; 
}
else {
	echo"OOPS!!!, ocurrió un error.";
}
$mysqli->close();
?>