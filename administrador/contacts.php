<?php
 require_once '../utili/sesion.php';

?>
<?php
require_once "../utili/Conexion.php";?>
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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
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
                <h3>Perfil de Instructores</h3>
              </div>

              <div class="title_right">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
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

                      <div class="clearfix"></div>
                      <div class="col-md-3 col-sm-3  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <?php
                              require_once "conexion/Conexion.php";
                            $sql1="SELECT * FROM persona";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Número</th> 
                              <th>Descripcion</th>
                              <th>Sede</th>
                              <th>Actualizar</th>
                              <th>Habilitar/Deshabilitar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                    $datos=$key['id_aula']."||".
                                    $key['descripcion']."||".
                                    $key['nombre']."||".
                                    $key['estado'];

                             ?>
                             <tr>
                             <td id="column1"><?php echo  mb_strtoupper($key['nombre']); ?></td>
                             <td id="column2"><?php echo  mb_strtoupper($key['email']); ?></td>
                            <td id="column3"><?php echo  mb_strtoupper($key['nombre']); ?></td>
                              <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px"></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                                </td>
                          </tr>
                            <?php }
    
     ?><?php }
    
     ?>
                            </tbody>
                            </table>
                            <h4 class="brief"><i>Instructor</i></h4>
                            <div class="left col-md-7 col-sm-7">
                              <h2>Alvaro Cortez</h2>
                              <p><strong>Especialidad: </strong> Diseñador Grafico </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope"></i> Email: </li>
                              </ul>
                            </div>
                            <div class="right col-md-5 col-sm-5 text-center">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-3  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Instructor</i></h4>
                            <div class="left col-sm-7">
                              <h2>Johanna Cifuentes</h2>
                              <p><strong>Especialidad: </strong> Ingeniera en Sistemas</p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope"></i> Email: </li>
                              </ul>
                            </div>
                            <div class="right col-sm-5 text-center"></div>
                            </div>
                          </div>
                        </div>

                      <div class="col-md-3 col-sm-3  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Instructor</i></h4>
                            <div class="left col-sm-7">
                              <h2>Jhon Moreno</h2>
                              <p><strong>Especialidad: </strong> Ingeniero en Sistemas</p>
                              <ul class="list-unstyled">
                                 <li><i class="fa fa-envelope"></i> Email: </li>
                              </ul>
                            </div>
                            <div class="right col-sm-5 text-center"></div>
                          </div>
                          
                          </div>
                        </div>
                      </div>

                     
                         

                     
                            </div>
                          </div>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>