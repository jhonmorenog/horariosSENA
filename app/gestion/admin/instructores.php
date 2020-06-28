<?php
require_once '../../../util/rutas.php';
require_once $rutaConexionGestion;
?>


<style>
    #des1{
        color: gainsboro;
    }
    #des0{
        color: #73879C;
    }
</style>
<script type="text/javascript">

    function estadoh(datos) {
        d = datos.split('||');
        $('#idh').val(d[0]);

    }
    function estadod(datos) {
        d = datos.split('||');
        $('#idd').val(d[0]);
    }

</script>
<div class="x_panel">
    <div class="x_content">
        <div class="col-md-12 col-sm-12  text-center">
            <ul class="pagination pagination-split">
                <li><a href="#">A</a></li>
                <li><a href="#">B</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">D</a></li>
                <li><a href="#">E</a></li>
                <li>...</li>
                <li><a href="#">W</a></li>
                <li><a href="#">X</a></li>
                <li><a href="#">Y</a></li>
                <li><a href="#">Z</a></li>
            </ul>
        </div>


        <?php
        $sql1 = "SELECT *, persona.estado as co FROM persona where rol_documento=3";
        $query = $mysqli->query($sql1);
        if ($query->num_rows >= 1) {
            ?>
            <?php
            foreach ($query as $key) {
                $datos = $key['documento'];
                ?>
                <div class="col-md-55">

                    <div class="well profile_view" id="des<?php echo $key['co']; ?>">
                        <div class="mask">
                            <h2 class="brief"><i class="fa fa-user"></i><i> Instructor</i></h2>
                            <br>
                            <div>
                                <h4 class="brief"> <?php echo $key['nombre']; ?> <?php echo $key['apellido']; ?></h4>
                                <br>
                                <strong>Especialidad: </strong> Ingeniero de sistemas 
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-envelope-o"></i> E-mail: <?php echo $key['email']; ?></li>
                                </ul>
                                <br>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px; color: #73879C;" type="button" class="btn" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos ?>')"><i class="fa fa-check" style="margin-left: -5px" ></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px; color: #73879C;" type="button" class="btn" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos ?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            <?php }
            ?>
            <?php
        } else {
            echo "Tabla vacía";
        }
        ?>
        <form action="Deshabilitar/DeshabilitarPersona.php" method="post"> 
            <div class="modal fade" id="dataDeshabi" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Contacto</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="number"  name="idd" id="idd" hidden="" >
                            </div>

                            <label>¿Está seguro de que quiere deshabilitar el contacto?</label>

                            <div class="modal-footer">
                                <button id="comsea" style="margin: 10px" type="submit"  class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="Habilitar/HabilitarPersona.php" method="post"> 
            <div class="modal fade" id="dataHabi" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Habilitar Persona</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                            </div>
                            <label>¿Está seguro de que quiere habilitar el contacto?</label>

                            <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Habilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>