<?php
require_once '../../../util/rutas.php';
require_once $rutaConexionGestion;
?>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Centro</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3" action="">Registrar centro</button>
        <form action="Guardar/GuardarCentro.php" method="post"> 
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Registrar Centros</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text"  name="centro" class="form-control" placeholder="Nombre del centro"></div>
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <?php

                        $sql1 = "SELECT *, centro.estado as c FROM centro";
                        $query = $mysqli->query($sql1);
                        if ($query->num_rows >= 1) {
                            ?>
                            <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th> 
                                            <th>Centro</th>
                                            <th>Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($query as $key) {
                                            $datos = $key['id_centro'] . "||" .
                                                    $key['nombre_centro'];
                                            ?>
                                            <tr>
                                                <td><?php echo $key['id_centro']; ?></td>
                                                <td><?php echo mb_strtoupper($key['nombre_centro']); ?></td>
                                                <td>
                                                    <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
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
<form action="Actualizar/ActualizarCentro.php" method="post"> 
    <div class="modal fade" id="dataUpdate" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Centro</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text"  name="idu" id="idu" hidden="">
                        <input type="text" name="centrou" id="centrou" class="form-control">
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

