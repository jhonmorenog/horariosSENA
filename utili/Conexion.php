<?php

$mysqli = new mysqli("localhost", "root", "", "horarios_sena");

if (mysqli_connect_errno()) {
    echo "Este sitio esta presentando problemas";
}
$mysqli->set_charset("utf8");

?>