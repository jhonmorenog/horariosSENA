<!DOCTYPE html>
<html lang="en">
  <?php require_once "head.php" ?>

  <body class="nav-md">
      
    <div class="container body">
      <div class="main_container">

              <?php require_once "menu.php" ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de Instructores</h3> 
              </div>

              <div style="float: right;">
                <br/>
                <button type="button" style="background-color: #57D3AF;" class="btn" data-toggle="modal" data-target="#myModal">Enviar formulario de auto-registro</button>
                </div>
                <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registro de instructores</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="col-md-6">
                            <div id="cnt_form">
                          <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                            <div class="form-group">
                              <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Destinatarios"></div>
                               <div class="form-group">
                             <div class="form-group">
                              <textarea name="mensaje" id="message"
                              required="required" class="form-control" rows="8" placeholder="Asunto"></textarea></div>
                               <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button></div>
                            <!-- end user projects -->

                          </div>                      
                        </div>
                      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

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
                               require_once '../../utili/Conexion.php';
                            $sql1="SELECT *, persona.estado as co FROM persona";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <?php foreach ($query as $key) {
                                    $datos=$key['documento'];
                                    ?>
                               <div class="col-md-55">
                          
                          <div class="well profile_view" id="des<?php echo $key['co']; ?>">
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
                              <br>
                              
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
                        </div>
                      </div>

                     
                         

                     
                            </div>
                        
                       
                    
                 
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SENA Horarios. <a href="https://colorlib.com">Política de privacidad</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="../../vendor/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendor/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendor/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendor/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../../vendor/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../../vendor/Flot/jquery.flot.js"></script>
    <script src="../../vendor/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/Flot/jquery.flot.time.js"></script>
    <script src="../../vendor/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendor/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendor/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendor/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendor/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendor/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>