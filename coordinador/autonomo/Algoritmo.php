<?php
include './Consulta.php';


foreach ($instructores as $data  ){
    
    foreach ($fichas as $fData){
        if($data["certificacion"]==$fData["denominacion"]){
            echo "se ha asignado al instructor".$data["documento"]." a la ficha ".$fData["numero_ficha"]." de la especialidad ".$fData["denominacion"];
        }
    }
    
}

//consultar fichas dispobibles en los bloques


//selecciona la ficha y el programa 
function fichaPrograma() {
    
    
}

//comparara el programa de la ficha con el intructor
function compararFichaIntructor() {
    
}

//comparar bloque a asignar con el bloque guardado
function functionName1($param) {
    
}

//guardar el bloque
function functionName2($param) {
    
}



