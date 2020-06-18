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
        function estadoh(datos){
      d=datos.split('||');
      $('#idh').val(d[0]);
      $('#idht').val(d[0]);
      $('#idhr').val(d[0]);
      $('#idha').val(d[0]);
      $('#idhn').val(d[0]);
      }
      function estadod(datos){
      d=datos.split('||');
      $('#idd').val(d[0]);
      $('#iddt').val(d[0]);
      $('#iddr').val(d[0]);
      $('#idda').val(d[0]);
      $('#iddn').val(d[0]);
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
                    <h2>Bloque</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> 
                  
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once '../utili/Conexion.php';
                            
                            $sql1="SELECT * FROM bloque,aula,persona,ficha where bloque.persona_documento=persona.documento and bloque.aulaid_aula=aula.id_aula and bloque.fichanumero_ficha=ficha.numero_ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Aula</th>    
                              <th>Rango de horas</th> 
                              <th>Día</th>
                              <th>Trimestre</th>
                              <th>Año</th>
                              <th>Ficha</th>
                              <th>Instructor</th>
                              <th>Actualizar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                
                     ?>
                             <tr>
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['rango_horas']; ?></td>
                            <td><?php echo mb_strtoupper($key['dia']);?></td>
                            <td><?php echo $key['trimestre']; ?></td>
                            <td><?php echo $key['anio']; ?></td>
                            <td><?php echo $key['numero_ficha']; ?></td>
                            <td><?php echo mb_strtoupper($key['nombre']);?></td>
                             <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" action=""><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
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
                <form action="Actualizar/ActualizarBloque.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Bloques</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="dia" class="form-control" placeholder="Dia">
                              </div>  
                              <div class="form-group">
                            <input type="number" name="trimestre" class="form-control" placeholder="Trimestre">
                              </div>  
                              <div class="form-group">
                                <label>Rango de Horas</label> 
                                  <select name="rango_horas" class="form-control" type="time">
                                      <option value="0">Seleccionar</option>
                                      <option value="1">6:00-7:40</option>
                                      <option value="2">8:00-9:40</option>
                                      <option value="3">10:00-11:40</option>
                                      <option value="4">12:00-13:40</option>
                                      <option value="5">14:20-16:00</option>
                                      <option value="6">16:20-18:00</option>
                                      <option value="7">18:15-19:45</option>
                                      <option value="8">20:00-21:40</option>
                                  </select>
                              </div>
                                      <div class="form-group">
                                <label>Persona</label> 
                                  <select name="persona_documento" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM persona");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[documento].'">'.$valores[nombre].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Numero de Ficha</label> 
                                  <select name="fichanumero_ficha" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM ficha");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[numero_ficha].'">'.$valores[numero_ficha].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Aula</label> 
                                  <select name="aulaid_aula" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM aula");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_aula].'">'.$valores[id_aula].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="modal-footer">
                              <label >Año:</label>
                              <input type="number" name="anio" class="form-control" placeholder="Año"> 
                            </div>  
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

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