<?php

$AsignarFichasQuery="select numero_ficha, denominacion, persona_documento
from
instructor_ficha i  
inner join 
ficha f  on f.numero_ficha=i.fichanumero_ficha
inner join 
programa_ficha pf on f.numero_ficha=pf.fichanumero_ficha 
inner join 
programa p on  p.id_programa=pf.id_programa;
;";


$SeleccionarAulaQuery="select id_aula, descripcion, nombre 
from aula a, descripcion_aula da, sede s
where a.id_descripcion  = da.id_descripcion And a.sedeid_sede  = s.id_sede ;";

$SeleccionarProgramaCompetencia="Select c.id_competencia, c.denominacion AS 'Denominacion_competencia',p.denominacion AS 'Denominacion_programa', duracion, p.id_programa,meses_lectiva, tipo, denominacion_nivel"
        . " from competencia c inner join programa_competencia p_c on c.id_competencia=p_c.id_competencia inner join programa p on p.id_programa=p_c.id_programa inner join tipo t on "
        . "t.id_tipo=p.id_tipo inner join nivel_formacion n on n.id_nivel=p.id_formacion inner join duracion d on d.id_duracion=p.id_duracion";