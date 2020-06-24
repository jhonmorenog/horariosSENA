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
        <link rel="icon" href="images/SENA Horarios.jpg" type="image/ico" />
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
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-calendar"></i> <span>SENA Horarios</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/SENA Horarios.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2><?php echo $_SESSION['user'] ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />
                        <center><a href="index.php"><button class="btn" style="width: 150px; background-color: #57D3AF;">Home</button></a></center>
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Coordinador</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-search"></i>Consultar<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="index2.php">Ficha</a></li>
                                            <li><a href="index3.php">Programa</a></li>
                                            <li><a href="index4.php">Ambiente</a></li>
                                            <li><a href="index5.php">Sede</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-calendar"></i>Horarios<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="horarios.php">Generar</a></li>
                                            <li><a href="tables_dynamic.php">Tablas de creación</a></li>
                                            <li><a href="horarios2.php">Ver horarios</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.php"><i class="fa fa-users"></i>Instructores</a>
                                    <li><a href="calendar.php"><i class="fa fa-calendar-o"></i>Calendario</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../utili/logout.php">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
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
                                        <img src="images/SENA Horarios.jpg" alt=""><h2><?php echo $_SESSION['user'] ?></h2>
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="profile.php"> Perfil</a>
                                        <a class="dropdown-item"  href="form_validation.php">
                                            <span>Configuración</span>
                                        </a>
                                        <a class="dropdown-item"  href="../../utili/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
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
                        <h1>Aulas registradas</h1>
                    </div>
                    <div class="">
                        <div class="row" style="display: inline-block;">
                            <hr>

                            <div class="top_tiles">


                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>CENIGRAF</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row" style="display: inline-block;">
                                                        <hr>

                                                        <div class="top_tiles">
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">100</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">102</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">103</div>
                                                                    <h3>Mesas de dibujo</h3>
                                                                    <p>Ilustración.</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">104</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">105</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">106</div>
                                                                    <h3>Maquinaria</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">107</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">108</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Calle 69</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row" style="display: inline-block;">
                                                        <hr>

                                                        <div class="top_tiles">
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">100</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">102</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">103</div>
                                                                    <h3>Mesas de dibujo</h3>
                                                                    <p>Ilustración.</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">104</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                                                    <div class="count">105</div>
                                                                    <h3>Tablero</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">106</div>
                                                                    <h3>Maquinaria</h3>
                                                                    <p>Serigrafía - Impresión 3D - Impresión</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">107</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
                                                                </div>
                                                            </div>
                                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                                                                <div class="tile-stats">
                                                                    <div class="icon"><i class="fa fa-gears"></i></div>
                                                                    <div class="count">108</div>
                                                                    <h3>Computadoras</h3>
                                                                    <p>ADSI - Sistemas - P. Multimedia</p>
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