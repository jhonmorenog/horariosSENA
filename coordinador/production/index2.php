<!DOCTYPE html>
<html lang="en">
  <?php require_once "head.php" ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php require_once "menu.php" ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="col-md-12" style="height: 100px;">
          <br />
        <h1>Fichas registradas</h1>
        </div>
          <div class="">
            <div class="row" style="display: inline-block;">
              <hr>

            <div class="top_tiles">
                 <?php
                               require_once '../../utili/Conexion.php';
                            $sql1="SELECT numero_ficha, denominacion, denominacion_nivel FROM ficha inner join"
                                    . " programa_ficha pf on ficha.numero_ficha=pf.fichanumero_ficha inner join "
                                    . "programa on programa.id_programa=pf.id_programa INNER JOIN "
                                    . "nivel_formacion on programa.id_formacion=nivel_formacion.id_nivel";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <?php foreach ($query as $key) {
                                    
                                    ?>
                               <div class="animated flipInY col-lg-8  col-sm-4 ">
                <div class="tile-stats">
                  <div class="count"><?php echo $key['numero_ficha'];?></div>
                  <h3><?php echo $key['denominacion'];?></h3>
                  <p><?php echo $key['denominacion_nivel'];?></p>
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
    <script src="../../vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>