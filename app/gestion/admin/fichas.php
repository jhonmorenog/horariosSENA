<?php
require_once '../../../util/rutas.php';
require_once $rutaConexionGestion;
?>


<style>
    .des1{
        color: gainsboro;
    }
    .des0{
        color: black;
    }
</style>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Fichas</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal5" action="">Registrar Fichas</button>
        
        <form action="Guardar/GuardarFicha.php" method="post">
            <div class="modal fade" id="myModal5" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Registrar Fichas</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input name="numero_ficha" class="form-control" placeholder="Numero ficha" required="">
                            </div>  
                            <div class="modal-footer">
                                <label for="inicio">Fecha de inicio:</label>
                                <input type="date" id="inicio" name="inicio" class="form-control" required=""> 
                            </div>  
                            <div class="modal-footer">
                                <label for="final">Fecha de finalizacion:</label>
                                <input type="date" id="final" name="final" class="form-control" required=""> 
                            </div>  
                            <div class="modal-footer">
                                <label for="Jornada">Jornada:</label>
                                <select name="jornada" class="form-control" required="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <option value="Diurna" >Diurna</option>
                                    <option value="Nocturna" >Nocturna</option>
                                    <option value="Fines de semana" >Fines de semana</option>
                                </select> 
                            </div>  
                            <div class="modal-footer">
                                <label for="programa">Programa:</label>
                                <select name="programa" class="form-control" required="">
                                    <option value="" selected disabled>Seleccionar</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM programa");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores[id_programa] . '">' . $valores[denominacion] . '</option>';
                                    }
                                    ?>
                                </select> 
                            </div>
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form> 
        <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div>
                            <label><h5>Recuerde:</h5>Los datos que aparecen en color <label style="color: black">negro </label> están habilitados para el uso en la creción del horario<br> Los datos que aparecen en color <label style="color: gainsboro;">gainsboro </label> están dehabilitados para esta función.</label>
                        </div>
                    </div>
                </div>
            </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">

                        <?php
                        $sql1 = "SELECT numero_ficha,ingreso,salida,ficha.estado,jornada,denominacion,ficha.estado as f FROM ficha,programa_ficha,programa WHERE numero_ficha=fichanumero_ficha AND programa_ficha.id_programa=programa.id_programa order by numero_ficha desc";
                        $query = $mysqli->query($sql1);
                        if ($query->num_rows >= 1) {
                            ?>
                            <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Numero ficha</th> 
                                            <th>Fecha de inicio</th>
                                            <th>Fecha de finalización</th>
                                            <th>Programa</th>
                                            <th>Jornada</th>                                            
                                            <th>Actualizar</th>
                                            <th>Habilitar/Deshabilitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($query as $key) {
                                            $datos = $key['numero_ficha'] . "||" .
                                                    $key['ingreso'] . "||" .
                                                    $key['salida']. "||" .
                                                    $key['denominacion']. "||" .
                                                    $key['jornada'];
                                            ?>
                                            <tr class="des<?php echo $key['f']; ?>">
                                                <td><?php echo $key['numero_ficha']; ?></td>
                                                <td><?php echo $key['ingreso']; ?></td>
                                                <td><?php echo $key['salida']; ?></td>
                                                <td><?php echo $key['denominacion']; ?></td>                                                
                                                <td><?php echo $key['jornada']; ?></td>
                                                <td>
                                                    <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="actuaform('<?php echo $datos ?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                                </td>
                                                <td>
                                                    <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos ?>')"><i class="fa fa-check" style="margin-left: -5px"></i></button>
                                                    <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos ?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            } else {
                                echo "Tabla vacía";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<form action="Actualizar/ActualizarFicha.php" method="post"> 
    <div class="modal fade" id="dataUpdate" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Ficha</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input name="numero_fichau" id="numero_fichau" class="form-control" placeholder="Numero ficha">
                    </div>  
                    <div class="form-group">
                        <label for="inicio">Fecha de inicio:</label>
                        <input type="date" id="iniciou" name="iniciou" class="form-control"> 
                    </div>  
                    <div class="form-group">
                        <label for="final">Fecha de finalizacion:</label>
                        <input type="date" id="finalu" name="finalu" class="form-control"> 
                    </div>
                    <div class="modal-footer">
                        <label for="programa">Programa:</label>
                        <select name="programau" class="form-control" required="">
                            <option value="" selected disabled>Seleccionar</option>
                            <?php
                            $query = $mysqli->query("SELECT * FROM programa");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores[id_programa] . '">' . $valores[denominacion] . '</option>';
                            }
                            ?>
                        </select> 
                    </div>
                    <div class="modal-footer">
                        <label for="Jornada">Jornada:</label>
                        <select id="jornadau" name="jornadau" class="form-control" required="">
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="Diurna" >Diurna</option>
                            <option value="Nocturna" >Nocturna</option>
                            <option value="Fines de semana" >Fines de semana</option>
                        </select> 
                    </div>
                    <div class="modal-footer">
                        <button style="margin: 10px" type="submit" class="btn btn-dark">Actualizar</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="Deshabilitar/DeshabilitarFicha.php" method="post"> 
    <div class="modal fade" id="dataDeshabi" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deshabilitar Ficha</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="number"  name="idd" id="idd" hidden="" >
                    </div>
                    <label>¿Está seguro de que quiere deshabilitar la ficha?</label>

                    <div class="modal-footer">
                        <button style="margin: 10px" type="submit" class="btn btn-dark">Deshabilitar</button>

                        <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="Habilitar/HabilitarFicha.php" method="post"> 
    <div class="modal fade" id="dataHabi" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Habilitar Ficha</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="number"  name="idh" id="idh" hidden="" >
                    </div>
                    <label>¿Está seguro de que quiere habilitar la ficha?</label>

                    <div class="modal-footer">
                        <button style="margin: 10px" type="submit" class="btn btn-dark">Habilitar</button>

                        <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
