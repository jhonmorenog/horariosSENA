<?php




// retorna el próximo trimestre a generar los horarios
function trimestreProximo($opcion) {
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
    if ($numTrimestre == 4 && $opcion==0) {
        $proximoTrimestre = 1;
    } else if($opcion==0) {
        $proximoTrimestre = $numTrimestre + 1;
    }else if($opcion==1 ){
        $proximoTrimestre = $numTrimestre;
    }
    
   

    return $proximoTrimestre;
}



?>