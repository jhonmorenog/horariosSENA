<?php
require_once "../utili/Conexion.php";

$id_programa = $_POST['idd'];

$query = "UPDATE programa set  estado = 1 WHERE id_programa=$id_programa";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='programas.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>