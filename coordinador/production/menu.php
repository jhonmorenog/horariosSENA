
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
        <br />
        <center><a href="index.php"><button class="btn" style="width: 150px; background-color: #57D3AF;">Home</button></a></center>
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Coordinador</h3>
                <ul class="nav side-menu">
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
