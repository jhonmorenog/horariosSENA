<?php 
require_once "conexion/Conexion.php";
$email=$_POST['email'];
$clave=md5($_POST['password']);
$query="SELECT * FROM persona WHERE email='$email' AND clave='$clave'";
$consulta2=$mysqli->query($query);
if($consulta2->num_rows>=1){
	$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
	session_start();
	$_SESSION['verificar']=true;
	$_SESSION['user']=$fila['nombre'];
	$_SESSION['correo']=$fila['email'];
	$_SESSION['tiempo']=time();
	$_SESSION['expira']=$_SESSION['tiempo'];
	
	header("Location: profile.php");
	}else{
		print"<script>alert(\"Datos no reconocidos.\");
		window.location='login.php';</script>";
	}

 ?>