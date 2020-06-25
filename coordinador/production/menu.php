<!--inicio menu principal -->
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/circle-sentime.ico" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?php echo $_SESSION['user'] ?></h2>
              </div>
            </div>
        <!-- /menu profile quick info -->
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Coordinador</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-laptop"></i>Inicio</a></li>
                    <li><a><i class="fa fa-search"></i>Consultar datos<span class="fa fa-chevron-down"></span></a>
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
                    <li><a href="contacts.php"><i class="fa fa-users"></i>Instructores</a></li>
                    
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

    </div>
</div>
<!-- fin de menu principal -->

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
                        <img src="images/SENA Horarios.jpg" alt=""><?php echo $_SESSION['user'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="profile.html"> Perfil</a>
                        <a class="dropdown-item"  href="form_validation.php">
                            <span>Configuración</span>
                        </a>
                        <a class="dropdown-item"  href="../../utili/logout.php"><i class="fa fa-sign-out pull-right"></i>Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- /top navigation -->