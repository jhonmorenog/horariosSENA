<?php
require_once '../../../util/rutas.php';
require_once $rutaConexionGestion;
?>

<script type="text/javascript">
    function agregaform(datos) {
        d = datos.split('||');
        $('#idu').val(d[0]);
        $('#denominacionu').val(d[1]);

    }
</script>



<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Resultados</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal9" action="">Registrar Resultado</button>
        <form action="Guardar/GuardarResultado.php" method="post">
            <div class="modal fade" id="myModal9" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Registrar Resultado</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea  name="denominacion" class="form-control" placeholder="Resultado"></textarea>
                            </div>  
                            <div class="form-group">
                                <label>Competencia</label> 
                                <select name="id_competencia" class="form-control" class="form-control" required="">
                                    <option value="0" >Seleccionar</option>
                                    <?php
                                    $query = $mysqli->query("SELECT * FROM competencia");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $valores[id_competencia] . '">' . $valores[denominacion] . '</option>';
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
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <?php
                        $sql1 = "SELECT * FROM competencia, resultado where competencia.id_competencia=resultado.id_competencia";
                        $query = $mysqli->query($sql1);
                        if ($query->num_rows >= 1) {
                            ?>
                            <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>    
                                            <th>Resultado</th>
                                            <th>Competencia</th>
                                            <th>Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    foreach ($query as $key) {
        $datos = $key['id_resultado'] . "||" .
                $key['denominacion_resultado'] . "||" .
                $key['denominacion'];
        ?>

                                            <tr class="des<?php echo $key['estado']; ?>">
                                                <td><?php echo $key['id_resultado']; ?></td>
                                                <td><?php echo mb_strtoupper($key['denominacion_resultado']); ?></td>
                                                <td><?php echo mb_strtoupper($key['denominacion']); ?></td>
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
<form action="Actualizar/ActualizarResultado.php" method="post"> 
    <div class="modal fade" id="dataUpdate" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Resultado</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text"  name="idu" id="idu" hidden="">
                        <textarea  name="denominacionu" id="denominacionu" class="form-control" placeholder="Resultado"></textarea>
                    </div>  
                    <div class="form-group">
                        <label>Competencia</label> 
                        <select name="id_competenciau" id="id_competenciau" class="form-control" class="form-control" required="">
                            <option value="0" >Seleccionar</option>
<?php
$query = $mysqli->query("SELECT * FROM competencia");
while ($valores = mysqli_fetch_array($query)) {
    echo '<option value="' . $valores[id_competencia] . '">' . $valores[denominacion] . '</option>';
}
?>
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
