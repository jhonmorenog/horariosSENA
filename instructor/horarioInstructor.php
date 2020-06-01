<?php
  
  session_start();
        if (!isset($_SESSION['user'])) {
        print"<script>alert(\"Por favor inicie sesión.\");
        window.location='login.php';</script>";
        exit();
        }
        
        $inactividad = 600;
        if(isset($_SESSION["expira"])){
        $sessionTTL = time() - $_SESSION["expira"];
        if($sessionTTL > $inactividad){
            session_destroy();
            print"<script>alert(\"Su sesion ha finalizado por inactividad.\");
        window.location='login.php';</script>";
            exit();
        }
        }
        $_SESSION["expira"] = time();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horarios SENA </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="icon/circle.ico" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $_SESSION['user'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Instructor</h3>
                <ul class="nav side-menu">
                 
                    <li><a href="horarioInstructor.php"><i class="fa fa-laptop"></i> Mi Horario</a></li>
                    <li><a href="homeInstructor.php"><i class="fa fa-calendar"></i>Calendario</a></li>
                 </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                 <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <?php echo $_SESSION['user'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="profileInstructor.php"> Perfil</a>
                      <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                    </div>
                  </li>
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">2</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item" href="profileInstructor.php">
                          
                          <span>
                            <span>Johanna Cifuentes</span>
                            <span class="time">Hace 3 minutos</span>
                          </span>
                          <span class="message">
                            Buen día señor coordinador la presente es para informar...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                          <a class="dropdown-item" href="profileInstructor.php">
                         
                          <span>
                            <span>John Moreno</span>
                            <span class="time">Hace 10 minutos</span>
                          </span>
                          <span class="message">
                            Señor coordinador quisierar verificar mi horario pues...
                          </span>
                        </a>
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mi Horario</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="container">
                    <div class="table-responsive">            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bloque</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>06:00 a 07:40</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>08:00 a 09:40</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>10:00 a 11:40</td>
        <td></td>
        <td></td>
        <td>1828917-ADSI-502</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>12:00 a 13:40</td>
        <td></td>
        <td></td>
        <td>1828917-ADSI-502</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>14:20 a 16:00</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
      </tr>
      <tr>
        <td>16:20 a 18:00</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
      </tr>
      <tr>
        <td>18:15 a 19:45</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td></td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
      </tr>
      <tr>
        <td>20:00 a 21:40</td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
        <td></td>
        <td>1828917-ADSI-502</td>
        <td>1828917-ADSI-502</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
        
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
    <script src="../vendors/moment/min/moment.min.js"></script>

    <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../vendors/fullcalendar/dist/fullcalendar.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
        
    
  </body>
</html>