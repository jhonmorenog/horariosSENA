<?php

// variables de acceso 
$dataBD = null;

include './Conexion.php';
include './Querys.php';
include './Arreglos.php';


x($fichasQuery,"fichas");
x($instructoresQuery,"instructores");
x($sedeAulaQuery,"sedeAula");



function x($sql,$arreglo){
    $c = new Conexion();
    creaArreglo(data($c->consulta($sql)),$arreglo);
    $c->close();
}
function data($result) {
    if ($result->num_rows > 0) {
        $GLOBALS["dataBD"] = $result;
        return true;
    } else {
        return false;
    }
}

function creaArreglo($param,$arreglo) {
    
    if ($param) {
        while ($row = $GLOBALS["dataBD"]->fetch_assoc()) {
            array_push($GLOBALS[$arreglo], $row);
        }
    }
}


?>
