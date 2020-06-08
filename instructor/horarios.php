<?php
include_once '../utili/sesion.php';
require_once '../ScriptDB/Querys.php';
require_once '../utili/Conexion.php';


$query = $mysqli->query(bloquePorInstructor($_SESSION['documento']));
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Bloque</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($query as $key) {
            echo "Trimestre (".$key['trimestre'].") del año (".$key['anio'].")";
            ?>


            <tr>
                <td title="locas">06:00 a 07:40</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>08:00 a 09:40</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>10:00 a 11:40</td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='10:00-11:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>12:00 a 13:40</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>14:20 a 16:00</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>16:20 a 18:00</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>18:15 a 19:45</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>
            <tr>
                <td>20:00 a 21:40</td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Lunes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';} ?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Martes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Miércoles' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Jueves' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Viernes' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
                <td><?php if($key['rango_horas']=='06:00-07:40' && $key['dia']=='Sábado' ){ echo '<p title="Especialidad">'.$key['aulaid_aula'].'-'.$key['fichanumero_ficha'].'</p>';}?></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>



