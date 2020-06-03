<?php
	require_once "../utili/Conexion.php";
	$count=0;
	if(!empty($_POST['add'])) {
		$evento = mysqli_real_escape_string($mysqli,$_POST["evento"]);
		$descripcion = mysqli_real_escape_string($mysqli,$_POST["descripcion"]);
		$sql = "INSERT INTO datos (evento,descripcion) VALUES('" . $evento . "','" . $descripcion . "')";
		mysqli_query($mysqli, $sql);
	}
	$sql2="SELECT * FROM datos WHERE estado = 0";
	$result=mysqli_query($mysqli, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: calendar.php' ) ;
?>
	