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
//inicio el proeceso de automatización
seleccionFicha();


/* busca dentro del arreglo las fichas que estánen formación el próximo trimestre y se le envía 
 * a seleccionInstructor una a una
 */

function seleccionFicha() {
    global $fichas;
    foreach ($fichas as $f) {

        seleccionInstructor($f);
    }
}

/*
 * optiene el número de la ficha y busca instructor por instructor para su asignación
 */

function seleccionInstructor($ficha) {
    global $instructores;
    foreach ($instructores as $instruc) {
        // validación de la denominación de la ficha con el título del instructor
        //obtener la información de los tres querys para  validar qué profesor es apto para la ficha y asigmar el resultado de aprendizaje correspondiente
        //se obtiene la $ficha
        /*
         * select numero_ficha, p.id_programa
          from
          ficha
          inner join
          programa_ficha pf on numero_ficha=fichanumero_ficha
          inner join
          programa p on p.id_programa=pf.id_programa
          where numero_ficha=$ficha
         */
        // gracias al query se obtiene el programa y se hace la consulta
        /*
         * SELECT * FROM horarios_sena.programa_competencia
          where id_programa=$programa
          ;
         */
        //obtengo los id de la competencias 
        /*
         * select documento, r.id_resultado, r.id_competencia
          from
          persona
          inner join
          persona_resultado pr on documento_persona=documento
          inner join
          resultado r on r.id_resultado=pr.id_resultado
          inner join
          competencia c on c.id_competencia=r.id_competencia
          where r.id_competencia=$id_competencia
         */
        // optengo los id de resultados y a su vez el instructor a asignar =>$instruc
        

        seleccionAula($instruc, $ficha);
    }
}
//selecciono el aula para la formación 
function seleccionAula($instruc, $ficha) {
    global $sedeAula;
    foreach ($sedeAula as $aula) {
        // mirar la descripción del aula y de acuerdo al programa asignar
        /*
         * saco el $aula
         */
        seleccionDia($instruc, $ficha, $aula);
    }
}
//selecciona el día  para asignar en el bloque
function seleccionDia($instruc, $ficha, $aula) {
    global $dia;
    foreach ($dia as $key => $d) {
        /*
         * se compara con la base de datos el día y el aula para saber si se asigna
         */
        //if(!){
        seleccionBloque($instruc, $ficha, $aula, $d);
        //}
    }
}


//creo el query de asignación y guardo en la base de datos
function seleccionBloque($instruc, $ficha, $aula, $d) {
    global $bloque;

    foreach ($bloque as $blo => $b) {

        echo "El día " . $d . " y el trimestre " . trimestreProximo() . " en el bloque " . $b . " la ficha " . $ficha["numero_ficha"] . " con el instructor " . $instruc["documento"] . " En el aula " . $aula["id_aula"] . "<br>";
    }
}

/*
 * mirar el programa de formación
 * qué materias por programa se ven en cada trimestre
 *          ya tenemos el programa, consultamos el arreglo donde está la info
 *          de qué materia se ve por trimestre
 * 
 */
/*
 * los de la noche SÍ ven todas las transversales, pero tienen que venir los sábados o virtual
 */






