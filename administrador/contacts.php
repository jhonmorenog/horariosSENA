<?php
 require_once '../utili/sesion.php';

?>
<?php
  
 require_once '../utili/Conexion.php';

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

                      
                             <?php
                               require_once '../utili/Conexion.php';
                            $sql1="SELECT * FROM persona";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <?php foreach ($query as $key) {
                                    ?>
                               <div class="col-md-55">
                          
                          <div class="well profile_view">
                            <div class="mask">
                              <h2 class="brief"><i class="fa fa-user"></i><i> Instructor</i></h2>
                              <br>
                              <div>
                              <h4 class="brief"> <?php echo $key['nombre'];?> <?php echo $key['apellido'];?></h4>
                              <br>
                              <strong>Especialidad: </strong> Diseñador Grafico 
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope-o"></i> E-mail: <?php echo $key['email'];?></li>
                              </ul>
                            </div>
                            </div>
                          </div>
                          
                      </div>
                      <?php }
                    ?>
                 <?php }else{
                              echo "Tabla vacía";
                          }
                          ?>
                            
                      
                            
                                    

                             
                             
                             
                            
                            
                            

                     
                         

                     
                            
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