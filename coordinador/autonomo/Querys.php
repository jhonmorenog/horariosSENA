<?php


$fichasQuery="select numero_ficha, denominacion
from ficha inner join programa_ficha fp on numero_ficha=fichanumero_ficha
inner join programa p on p.id_programa=fp.id_programa
where ficha.salida > \"".date("yy")."-".date("m")."-30\" order by denominacion asc;";

$instructoresQuery="select documento, nombre, apellido, rol, certificacion from titulo t
inner join 
persona_titulo pt on t.id_titulo=pt.id_titulo
inner join 
persona on persona_documento=documento
inner join 
rol on rol_documento=id_rol
where rol='instructor';";

$sedeAulaQuery="SELECT id_sede, nombre, id_aula, descripcion from sede INNER JOIN aula a on id_sede=sedeid_sede INNER JOIN descripcion_aula da on a.id_descripcion=da.id_descripcion";


/*
$dia = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

foreach ($dia as $key => $value) {
    //echo $value;
}












function trimestreProximo() {
    $numMes = date("m");
    $numTrimestre = "";
    $proximoTrimestre = 0;
    if ($numMes >= 1 && $numMes <= 3) {
        $numTrimestre = 1;
    } else if ($numMes >= 4 && $numMes <= 6) {
        $numTrimestre = 2;
    } else if ($numMes >= 7 && $numMes <= 9) {
        $numTrimestre = 3;
    } else if ($numMes >= 10 && $numMes <= 12) {
        $numTrimestre = 4;
    }
    if ($numTrimestre == 4) {
        $proximoTrimestre = 1;
    } else {
        $proximoTrimestre = $numTrimestre + 1;
    }

    return $proximoTrimestre;
}

*/

?>