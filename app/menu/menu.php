<?php
@session_start();
/**
 * Se verifica el rol del usuario logueado para mostrar el menú corresponidente al usuario
 */
$coordinador = FALSE;
$instructor = FALSE;
$administrador = FALSE;
if ($_SESSION['rol'] == "Administrador") {
    $coordinador = TRUE;
    $administrador = TRUE;
    $instructor = FALSE;
} else if ($_SESSION['rol'] == "Coordinador") {
    $coordinador = TRUE;
    $administrador = FALSE;
    $instructor = FALSE;
} else {
    $coordinador = FALSE;
    $administrador = FALSE;
    $instructor = TRUE;
}
?>


<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="../icon/circle-sentime.ico" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Bienvenido</span>
                    <h2><?php echo $_SESSION['user'] ?></h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">


                    <h3><?php echo $_SESSION['rol']; ?></h3>
                    <ul class="nav side-menu">
                        <li>
                            <a href="sentime.php">
                                <i class="fa fa-laptop"></i> 
                                Inicio
                            </a>
                        </li>
                        <?php if ($administrador || $coordinador) { ?>
                            <li><a><i class="fa fa-info-circle"></i> Información<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">


                                    <li><a href="#" onclick="ventana('admin/bloques')">Bloques</a></li>
                                    <?php if ($administrador) { ?>
                                        <li><a href="#" onclick="ventana('admin/centros')">Centros</a></li>
                                        <li><a href=#" onclick="ventana('admin/competencias')">Competencias</a></li>
                                        <li><a href="#" onclick="ventana('admin/descripciones')">Descripción de aula</a></li>
                                        <li><a href="#" onclick="ventana('admin/duraciones')">Duraciones de los niveles de formación</a></li>
                                    <?php } ?>
                                    <?php if ($administrador || $coordinador) { ?>
                                        <li><a href="#" onclick="ventana('admin/fichas')">Fichas</a></li>
                                    <?php } ?>
                                    <?php if ($administrador) { ?>
                                        <li><a href="#" onclick="ventana('admin/formaciones')">Niveles de formación</a></li>
                                        <li><a href="#" onclick="ventana('admin/programas')">Programas</a></li>
                                        <li><a href="#" onclick="ventana('admin/resultados')">Resultados de las competencias</a></li>
                                        <li><a href="#" onclick="ventana('admin/tipos')">Tipos de formación</a></li>
                                    <?php } ?>
                                    <?php if ($administrador || $coordinador) { ?>
                                        <li><a href="#" onclick="ventana('admin/aulas')">Aulas</a></li>
                                        <li><a href="#" onclick="ventana('admin/sedes')">Sedes</a></li>
                                    <?php } ?>


                                </ul></li>
                            <li><a href="#" onclick="ventana('admin/instructores')"><i class="fa fa-users"></i> Instructores</a></li>
                        <?php } ?>

                    </ul>
                    <ul class="nav side-menu">
                        <?php if ($coordinador) { ?>
                            <li><a><i class="fa fa-search"></i>Consultar datos<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#" onclick="ventana('coor/fichas')" >Fichas</a></li>
                                    <li><a href="#" onclick="ventana('coor/programas')">Programas</a></li>

                                </ul>
                            </li>
                            <li><a><i class="fa fa-calendar"></i>Horarios<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#" onclick="ventana('coor/generarHorarios')" >Generar</a></li>
                                </ul>
                            </li>

                        <?php } ?>
                    </ul>
                    <ul class="nav side-menu">
                        <?php if ($instructor || $coordinador) { ?>
                            <li><a href="#" onclick="ventana('horarios')"><i class="fa fa-laptop"></i> Ver horario</a></li>
                        <?php } ?>
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
                            <?php if ($instructor) { ?>
                                <a class="dropdown-item"  href="profileInstructor.php"> Perfil</a>
                            <?php } ?>
                            <a class="dropdown-item"  href="../util/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
