<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once '../../utili/sesion.php';
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.jpg" type="image/ico" />
        <title>SENA | Horarios </title>

        <!-- Bootstrap -->
        <link href="../../vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../../vendor/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../../vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                
                <?php require_once "menu.php" ?>

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
                                        <img src="images/img.jpg" alt=""><?php echo $_SESSION['user'] ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="profile.php"> Perfil</a>
                                        <a class="dropdown-item"  href="form_validation.php">
                                            <span>Configuración</span>
                                        </a>
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
                                            <a class="dropdown-item" href="profile.php">
                                                <span class="image"><img src="images/img3.jpg" alt="Profile Image" /></span>
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
                                            <a class="dropdown-item" href="profile.php">
                                                <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>Jhon Moreno</span>
                                                    <span class="time">Hace 10 minutos</span>
                                                </span>
                                                <span class="message">
                                                    Señor coordinador quisiera verificar mi horario pues...
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="text-center">
                                                <a class="dropdown-item">
                                                    <strong>Ver todas...</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
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
                    <div class="col-md-12" style="height: 100px;">
                        <br />
                        <h1>Fichas disponibles</h1>
                    </div>
                    <div class="">
                        <div class="row" style="display: inline-block;">
                            <hr>

                            <div class="top_tiles">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1828917</a></div>
                                        <h3>ADSI</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1860179</a></div>
                                        <h3>Ilustración</h3>
                                        <p>Técnico</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1797658</a></div>
                                        <h3>Serigrafía</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1245079</a></div>
                                        <h3>P. Multimedia</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1784609</a></div>
                                        <h3>Fotografía</h3>
                                        <p>Complementaria</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1570769</a></div>
                                        <h3>Sistemas</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1654879</a></div>
                                        <h3>Sistemas</h3>
                                        <p>Técnico</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                        <div class="count"><a href="">1276579</a></div>
                                        <h3>Impresión 3D</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 70px;">
                                    <br />
                                    <button class="btn" style="background-color: #57D3AF;">Generar todos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="height: 100px;">
                            <br />
                            <h1>Fichas no disponibles</h1>
                        </div>
                        <div class="row" style="display: inline-block;">
                            <hr>

                            <div class="top_tiles">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1828917</div>
                                        <h3>ADSI</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1860179</div>
                                        <h3>Ilustración</h3>
                                        <p>Técnico</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1797658</div>
                                        <h3>Serigrafía</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1245079</div>
                                        <h3>P. Multimedia</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1784609</div>
                                        <h3>Fotografía</h3>
                                        <p>Complementaria</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1570769</div>
                                        <h3>Sistemas</h3>
                                        <p>Tecnólogo</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1654879</div>
                                        <h3>Sistemas</h3>
                                        <p>Técnico</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                    <div class="tile-stats">
                                        <div class="count">1276579</div>
                                        <h3>Impresión 3D</h3>
                                        <p>Tecnólogo</p>
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