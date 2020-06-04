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
            $('#direccionu').val(d[1]);
        }
        function estadoh(datos){
      d=datos.split('||');
      $('#idh').val(d[0]);
      }
      function estadod(datos){
      d=datos.split('||');
      $('#idd').val(d[0]);
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
                    <h2>Sedes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" action="">Registrar Sedes</button>
                  <form action="GuardarSede.php" method="post">
                    <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Sedes</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text"  name="direccion" class="form-control" placeholder="Direccion la Sede">
                              </div>
                              <div class="form-group">
                            <input type="text"  name="nombre_sede" class="form-control" placeholder="Nombre de la Sede">
                              </div>
                              <div class="form-group">
                                <label>Centro al que pertenece</label> 
                                  <select name="centro" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM centro");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_centro].'">'.$valores[nombre_centro].'</option>';
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
                            
                            $sql1="SELECT * FROM sede,centro where centro.id_centro=sede.centroid_centro";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                              
                                <div class="container">
                                <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Id</th> 
                              <th>Nombre</th>
                              <th>Dirección</th>
                              <th>Centro</th>
                              <th>Actualizar</th>
                              <th>Habilitar/Deshabilitar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                $datos=$key['id_sede']."||".
                                        $key['direccion'];
                             ?>
                             <td><?php echo  mb_strtoupper($key['id_sede']); ?></td>
                             <td><?php echo  mb_strtoupper($key['nombre']); ?></td>
                            <td><?php echo  mb_strtoupper($key['direccion']); ?></td>
                            <td><?php echo  mb_strtoupper($key['nombre_centro']); ?></td>
                            
                            <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                
                                </td>
                                
                                <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px"></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
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
              
              <form action="ActualizarSede.php" method="post">
                    <div class="modal fade" id="dataUpdate" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Actualizar Sedes</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="idu" id="idu" hidden="">
                              <input type="text"  name="direccionu" id="direccionu" class="form-control" placeholder="Direccion la Sede">
                              </div>
                              <div class="form-group">
                                <label>Centro al que pertenece</label> 
                                  <select name="centrou" id="centrou" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM centro");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_centro].'">'.$valores[nombre_centro].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>

                            <button style="margin: 10px" type="submit" class="btn btn-dark" name="actualizar">Actualizar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <form action="DeshabilitarSede.php" method="post"> 
                    <div class="modal fade" id="dataDeshabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Sede</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idd" id="idd" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere deshabilitar la sede?</label>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <form action="HabilitarSede.php" method="post"> 
                    <div class="modal fade" id="dataHabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Habilitar Sede</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere habilitar el sede?</label>

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
              </div>
              </div>
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