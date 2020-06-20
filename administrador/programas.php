<?php
  
  require_once '../utili/sesion.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horarios SENA</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
    <script type="text/javascript">
        function agregaform(datos){
            d=datos.split('||');
            $('#idu').val(d[0]);
            $('#denominacionu').val(d[1]);
        }
    </script>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

   <?php
  
  require_once 'menu.php';

?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CENIGRAF <small>Información para la creación de horarios</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

           
            <div class="row">
    
             
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Programas de formación</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal4" action="">Registrar Programa</button>
                  <form action="Guardar/GuardarPrograma.php" method="post">
                    <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Programa</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="denominacion" class="form-control" placeholder="Nombre del programa">
                              </div>  
                              <div class="form-group">
                                <label>Meses lectiva</label> 
                                  <select name="id_duracion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_lectiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Meses productiva</label> 
                                  <select name="id_duracion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_productiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Nivel de formacion</label> 
                                  <select name="id_formacion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM nivel_formacion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_nivel].'">'.$valores[denominacion_nivel].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Tipo de formacion</label> 
                              <select name="id_tipo" class="form-control" required="">
                    <option value="0">Seleccionar</option>
                    <?php
                    require_once '../utili/Conexion.php';
                    $query=$mysqli->query("SELECT * FROM tipo");
                    while($valores=mysqli_fetch_array($query)){
                        echo '<option value="'.$valores[id_tipo].'">'.$valores[tipo].'</option>';
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
                              require_once '../utili/Conexion.php';
                            
                            $sql1="SELECT * FROM programa,tipo,nivel_formacion,duracion where tipo.id_tipo=programa.id_tipo and nivel_formacion.id_nivel=programa.id_formacion and duracion.id_duracion=programa.id_duracion";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable-responsive" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Id</th> 
                              <th>Nombre</th>
                              <th>Meses lectiva</th>
                              <th>Meses productiva</th>
                              <th>Nivel de formación</th>
                              <th>Tipo de formación</th>
                              <th>Actualizar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             $datos=$key['id_programa']."||".
                                    $key['denominacion'];
                             ?>
                             <tr>
                             <td><?php echo $key['id_programa']; ?></td>
                             <td><?php echo mb_strtoupper($key['denominacion']);?></td>
                             <td><?php echo $key['meses_lectiva'];?></td>
                             <td><?php echo $key['meses_productiva'];?></td>
                             <td><?php echo mb_strtoupper($key['denominacion_nivel']);?></td>
                             <td><?php echo mb_strtoupper($key['tipo']);?></td>
                            <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate1" onclick="agregaform('<?php echo $datos?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                </td>
                          </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
                <form action="Actualizar/ActualizarPrograma.php" method="post"> 
                    <div class="modal fade" id="dataUpdate1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Actualizar Programa</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                            <input type="text"  name="idu" id="idu" hidden="">
                            <input type="text" name="denominacionu" id="denominacionu" class="form-control" placeholder="Nombre del programa">
                              </div>  
                              <div class="form-group">
                                <label>Meses lectiva</label> 
                                  <select name="id_duracionu" id="id_duracionu" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_lectiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Meses productiva</label> 
                                  <select name="id_duracionu" id="id_duracionu"class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_productiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Nivel de formacion</label> 
                                  <select name="id_formacionu" id="id_formacionu" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM nivel_formacion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_nivel].'">'.$valores[denominacion_nivel].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Tipo de formacion</label> 
                              <select name="id_tipou" id="id_tipou" class="form-control" required="">
                    <option value="0">Seleccionar</option>
                    <?php
                    require_once '../utili/Conexion.php';
                    $query=$mysqli->query("SELECT * FROM tipo");
                    while($valores=mysqli_fetch_array($query)){
                        echo '<option value="'.$valores[id_tipo].'">'.$valores[tipo].'</option>';
                        }
                    ?>
                </select>
              </div>
                             
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Actualizar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
  
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Horarios SENA by ADSI</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>