<?php 

$mysqli= new mysqli("localhost", "root", "", "id12868532_horarios");

  if(mysqli_connect_errno()){
  	echo "Este sitio esta presentando problemas";
  }
$mysqli->set_charset("utf-8");

 ?>