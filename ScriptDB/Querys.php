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