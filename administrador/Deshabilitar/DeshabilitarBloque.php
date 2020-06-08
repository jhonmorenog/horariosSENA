<?php
require_once "../../utili/Conexion.php";

$dia = $_POST['idd'];
$trimestre = $_POST['iddt'];
$rango_horas = $_POST['iddr'];
$aulaid_aula = $_POST['idda'];
$anio = $_POST['iddn'];

$query = "UPDATE bloque set  estado = 1 WHERE dia='$dia',trimestre='$trimestre',rango_horas='$rango_horas', aulaid_aula='$aulaid_aula' and anio='$anio'";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='../bloques.php';</script>";
}else {
	echo "Ocurrio un error";
}
$mysqli->close();
?>