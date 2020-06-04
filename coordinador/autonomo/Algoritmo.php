<?php

include './Consulta.php';
include './functionx.php';

$bloque = array("06:00-07:04", "08:00-09:40", "10:00-11:40", "12:00-13:40", "14:20.16:00", "16:20-18:00", "18:15-19:45", "20:00-21:40");

$dia = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

//foreach ($dia as $key => $d) {// se inicia por los días de la semana 
//    //echo $d;
//    //seleccionar el bloque
//    foreach ($bloque as $blo => $b) {
//        //echo $b;
//        // miro ficha por ficha
//        foreach ($fichas as $f) {
//           //echo $f["numero_ficha"];
//            
//            //busco los instructores
//            foreach ($instructores as $instruc) {
//               // echo $instruc["documento"];
//               foreach ($sedeAula as $aula) {
//                   //echo $aula["id_aula"];
//                   echo "El día ".$d." y el trimestre ".trimestreProximo()." en el bloque ".$b." la ficha ".$f["numero_ficha"]." con el instructor ".$instruc["documento"]." En el aula ".$aula["id_aula"]."<br>";
//               }
//            }
//        }
//    }
//}

seleccionFicha();

function seleccionFicha(){
    global $fichas;
    foreach ($fichas as $f) {
        seleccionInstructor($f);
    } 
}
function seleccionInstructor($ficha){
    global $instructores;
    foreach ($instructores as $instruc) {
       // validación de la denominación de la ficha con el título del instructor
       seleccionAula($instruc,$ficha);
    }
}
function seleccionAula($instruc,$ficha){
    global $sedeAula;
    foreach ($sedeAula as $aula) {
        seleccionDia($instruc,$ficha,$aula);
    }
}
function seleccionDia($instruc,$ficha,$aula){
    global $dia;
    foreach ($dia as $key => $d){
        seleccionBloque($instruc,$ficha,$aula,$d);
    }
}
function seleccionBloque($instruc,$ficha,$aula,$d){
    global $bloque;
    foreach ($bloque as $blo => $b) {
        echo "El día ".$d." y el trimestre ".trimestreProximo()." en el bloque ".$b." la ficha ".$ficha["numero_ficha"]." con el instructor ".$instruc["documento"]." En el aula ".$aula["id_aula"]."<br>";
    }
    
}





