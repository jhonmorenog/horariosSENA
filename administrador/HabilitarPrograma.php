<?php
require_once "../utili/Conexion.php";

$id_programa = $_POST['idh'];

$query = "UPDATE programa set  estado = 0 WHERE id_programa=$id_programa";
if($mysqli->query($query)){
	print"<script>alert(\"Actualizacion exitosa.\");window.location='programas.php';</script>";
}else {
	echo "Ocurrio un error";
}

?>
 