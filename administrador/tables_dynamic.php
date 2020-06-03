<?php session_start()?>
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
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <?php if($flag == '1'){
        require_once "../utili/Conexion.php";    
        $SQL  = "UPDATE aula SET activated = '1' WHERE id_aula='$id_aula'";
        //mysql_query($SQL,$dbCon) or die(mysql_error());
      echo "debe usar la misma conexión,modifique ésta parte.";
    }else if($flag == '0'){
 
        $SQL  = "UPDATE aula SET activated = '0' WHERE id_aula='$id_aula'";
        //mysql_query($SQL,$dbCon) or die(mysql_error());
        echo "debe usar la misma conexión,modifique ésta parte.";
    }
 ?>
    <script language="JavaScript" type="text/JavaScript">
$(document).ready(function() {              
                $("a.enabled").click(function(){
                    codigo = $(this).parents("tr").find("td").eq(1).html();
                    update = 1;
                    
                        $("a.enabled").fadeOut("fast", function(){
                            
                              $.get("tables_dynamic.php", {codigo: codigo, update: update})
                              $('a.enabled').show();   
                       })
                    
                });
                
                $("a.disabled").click(function(){
                    codigo = $(this).parents("tr").find("td").eq(1).html();
                    update = 0;
 
                        $("a.disabled").fadeOut("fast", function(){
 
                              $.get("tables_dynamic.php", {codigo: codigo, update: update})
                              $('a.disabled').show(); 
                        })
                    
                });
});
</script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.html" class="site_title"><i class="fa fa-user"></i> <span>Horarios SENA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
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
                <h3>Coordinador</h3>
                <ul class="nav side-menu">
                 <li><a href="profile.php"><i class="fa fa-laptop"></i> Inicio</a></li>
                    <li><a href="calendar.php"><i class="fa fa-calendar"></i>Calendario</a></li>
                     <li><a href="tables_dynamic.php"><i class="fa fa-info-circle"></i> Información</a></li>
                      <li><a href="contacts.php"><i class="fa fa-users"></i> Instructores</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
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
                            <span>John Moreno</span>
                            <span class="time">Hace 10 minutos</span>
                          </span>
                          <span class="message">
                            Señor coordinador quisierar verificar mi horario pues...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CENIGRAF <small>Información para la creación de horarios</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Vamos!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Aulas</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" action="">Registrar aula</button>
                  <form action="GuardarAula.php" method="post"> 
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Registrar Aula</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                              <input type="number"  name="id" class="form-control" placeholder="Número del aula">
                              </div>
                              <label>Descripcion</label>
                              <div class="form-group">
                                <select name="descripcion" class="form-control" required="">
                                <option value="0">Seleccionar</option>
                                <?php
                                  require("conexion/Conexion.php");
                                  $query=$mysqli->query("SELECT * FROM descripcion_aula");
                                  while($valores=mysqli_fetch_array($query)){
                                      echo '<option value="'.$valores[id_descripcion].'">'.$valores[descripcion].'</option>';
                                      }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Sede a la que pertenece</label> 
                                <select name="sede" class="form-control" required="">
                                  <option value="0">Seleccionar</option>
                                  <?php
                                    require("conexion/Conexion.php");
                                    $query=$mysqli->query("SELECT * FROM sede");
                                    while($valores=mysqli_fetch_array($query)){
                                        echo '<option value="'.$valores[id_sede].'">'.$valores[nombre].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM aula,descripcion_aula,sede where aula.id_descripcion=descripcion_aula.id_descripcion and aula.sedeid_sede=sede.id_sede";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Número</th> 
                              <th>Descripcion</th>
                              <th>Sede</th>
                              <th>acciones</th>
                              <th>Deshabilitar</th>
                              <th>Habilitar</th>
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr id="myText">
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['descripcion']; ?></td>
                            <td><?php echo $key['nombre']; ?></td>
                            <td><button>actualizar</button><button>eliminar</button>
                            </td>
                            <td>
              <span class="button-group">
            <?php if ($fila['activated'] == '1') { ?>  <td> <a class='enabled' href='#' ><button class='button icon remove danger'>Desactivar</button></a></td><?php } ?>
            <?php if ($fila['activated'] == '0') { ?>  <td> <a class='disabled' href='#' ><button class='button icon approve'>Activar</button></a></td><?php } ?>
          </span></td>
                          </tr>
                            <?php }
    
     ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              
              
    

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sedes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" action="">Registrar Sedes</button>
                  <form action="GuardarSede.php" method="post">
                    <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Sedes</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text"  name="direccion" class="form-control" placeholder="Direccion la Sede">
                              </div>
                              <div class="form-group">
                            <input type="text"  name="nombre_sede" class="form-control" placeholder="Nombre de la Sede">
                              </div>
                              <div class="form-group">
                                <label>Centro al que pertenece</label> 
                                  <select name="centro" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM centro");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_centro].'">'.$valores[nombre_centro].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>

                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM sede,centro where centro.id_centro=sede.centroid_centro";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Id</th> 
                              <th>Nombre</th>
                              <th>Dirección</th>
                              <th>Centro</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_sede']; ?></td>
                             <td><?php echo $key['nombre']; ?></td>
                            <td><?php echo $key['direccion']; ?></td>
                            <td><?php echo $key['nombre_centro']; ?></td>
                          </tr>
                            <?php }
    
     ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Centro</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3" action="">Registrar centro</button>
                  <form action="GuardarCentro.php" method="post"> 
                    <div class="modal fade" id="myModal3" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Registrar Centros</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                            <div class="modal-body">
                              <div class="form-group">
                              <input type="text"  name="centro" class="form-control" placeholder="Nombre del centro"></div>
                              <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                             <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM centro";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Id</th> 
                              <th>Centro</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_centro']; ?></td>
                             <td><?php echo $key['nombre_centro']; ?></td>
                           </tr>
                            <?php }
    
                            ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Programas de formación</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal4" action="">Registrar Programa</button>
                  <form action="GuardarPrograma.php" method="post">
                    <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Programa</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="denominacion" class="form-control" placeholder="Nombre del programa">
                              </div>  
                              <div class="form-group">
                                <label>Meses lectiva</label> 
                                  <select name="id_duracion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_lectiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Meses productiva</label> 
                                  <select name="id_duracion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM duracion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_duracion].'">'.$valores[meses_productiva].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Nivel de formacion</label> 
                                  <select name="id_formacion" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM nivel_formacion");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_nivel].'">'.$valores[denominacion_nivel].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label>Tipo de formacion</label> 
                              <select name="id_tipo" class="form-control" required="">
                    <option value="0">Seleccionar</option>
                    <?php
                    require("conexion/Conexion.php");
                    $query=$mysqli->query("SELECT * FROM tipo");
                    while($valores=mysqli_fetch_array($query)){
                        echo '<option value="'.$valores[id_tipo].'">'.$valores[tipo].'</option>';
                        }
                    ?>
                </select>
              </div>
                             
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM programa,tipo,nivel_formacion,duracion where tipo.id_tipo=programa.id_tipo and nivel_formacion.id_nivel=programa.id_formacion and duracion.id_duracion=programa.id_duracion";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Id</th> 
                              <th>Nombre</th>
                              <th>Meses lectiva</th>
                              <th>Meses productiva</th>
                              <th>Nivel de formación</th>
                              <th>Tipo de formación</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_programa']; ?></td>
                             <td><?php echo $key['denominacion']; ?></td>
                            <td><?php echo $key['meses_lectiva']; ?></td>
                            <td><?php echo $key['meses_productiva']; ?></td>
                            <td><?php echo $key['denominacion_nivel']; ?></td>
                            <td><?php echo $key['tipo']; ?></td>
                          </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Fichas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal5" action="">Registrar Fichas</button>
                  <form action="GuardarFicha.php" method="post">
                    <div class="modal fade" id="myModal5" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Fichas</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <textarea  name="numero_ficha" class="form-control" placeholder="Numero ficha"></textarea>
                              </div>  
                              <div class="modal-footer">
                              <label for="inicio">Fecha de inicio:</label>
                              <input type="date" id="inicio" name="inicio" class="form-control"> 
                            </div>  
                            <div class="modal-footer">
                              <label for="final">Fecha de finalizacion:</label>
                              <input type="date" id="final" name="final" class="form-control"> 
                            </div>  
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                         <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Numero ficha</th> 
                              <th>Fecha de inicio</th>
                              <th>Fecha de finalización</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['numero_ficha']; ?></td>
                             <td><?php echo $key['ingreso']; ?></td>
                            <td><?php echo $key['salida']; ?></td>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bloque</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal6" action="">Registrar Bloque</button>
                  <form action="GuardarBloque.php" method="post">
                    <div class="modal fade" id="myModal6" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Bloques</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="dia" class="form-control" placeholder="Dia">
                              </div>  
                              <div class="form-group">
                            <input type="number" name="trimestre" class="form-control" placeholder="Trimestre">
                              </div>  
                              <div class="form-group">
                                <label>Rango de Horas</label> 
                                  <select name="rango_horas" class="form-control" type="time">
                                      <option value="0">Seleccionar</option>
                                      <option value="1">6:00-7:40</option>
                                      <option value="2">8:00-9:40</option>
                                      <option value="3">10:00-11:40</option>
                                      <option value="4">12:00-13:40</option>
                                      <option value="5">14:20-16:00</option>
                                      <option value="6">16:20-18:00</option>
                                      <option value="7">18:15-19:45</option>
                                      <option value="8">20:00-21:40</option>
                                  </select>
                              </div>
                                      <div class="form-group">
                                <label>Persona</label> 
                                  <select name="persona_documento" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM persona");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[documento].'">'.$valores[nombre].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Numero de Ficha</label> 
                                  <select name="fichanumero_ficha" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM ficha");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[numero_ficha].'">'.$valores[numero_ficha].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Aula</label> 
                                  <select name="aulaid_aula" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require("conexion/Conexion.php");
                                      $query=$mysqli->query("SELECT * FROM aula");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_aula].'">'.$valores[id_aula].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="modal-footer">
                              <label >Año:</label>
                              <input type="number" name="anio" class="form-control" placeholder="Año"> 
                            </div>  
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM bloque,aula,persona,ficha where bloque.persona_documento=persona.documento and bloque.aulaid_aula=aula.id_aula and bloque.fichanumero_ficha=ficha.numero_ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Aula</th>    
                              <th>Rango de horas</th> 
                              <th>Día</th>
                              <th>Trimestre</th>
                              <th>Año</th>
                              <th>Ficha</th>
                              <th>Instructor</th>
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['rango_horas']; ?></td>
                            <td><?php echo $key['dia']; ?></td>
                            <td><?php echo $key['trimestre']; ?></td>
                            <td><?php echo $key['anio']; ?></td>
                            <td><?php echo $key['numero_ficha']; ?></td>
                            <td><?php echo $key['nombre']; ?></td>
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
                
              
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Niveles de formación</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal7" action="">Registrar Nivel de formación</button>
                 <form action="GuardarNivelF.php" method="post">
  <div class="modal fade" id="myModal7" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Nivel de Formacion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <input type="text" name="denominacion" class="form-control" placeholder="Denominacion">
            </div>  
           
          <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
          </div>

</div>
</div>
</div>
</div>
</form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM nivel_formacion";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                              <th>Nivel de formación</th> 
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_nivel']; ?></td>
                             <td><?php echo $key['denominacion_nivel']; ?></td>
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Competencia</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal8" action="">Registrar Competencia</button>
                  <form action="GuardarCompetencia.php" method="post">
  <div class="modal fade" id="myModal8" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Competencia</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <textarea  name="denominacion" class="form-control" placeholder="Competencia"></textarea>
            </div>  
            <div class="form-group">
          <input type="text" name="duracion" class="form-control" placeholder="Duracion en horas">
            </div>
           
          <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
          </div>

</div>
</div>
</div>
</div>
</form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM competencia";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                              <th>Competencia</th>
                              <th>Duración</th> 
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_competencia']; ?></td>
                             <td><?php echo $key['denominacion']; ?></td>
                             <td><?php echo $key['duracion']; ?></td>
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resultados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal9" action="">Registrar Resultado</button>
                  <form action="GuardarResultado.php" method="post">
  <div class="modal fade" id="myModal9" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Resultado</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <textarea  name="denominacion" class="form-control" placeholder="Resultado"></textarea>
            </div>  
            <div class="form-group">
              <label>Competencia</label> 
                <select name="id_competencia" class="form-control" class="form-control" required="">
                    <option value="0" >Seleccionar</option>
                    <?php
                    require("conexion/Conexion.php");
                    $query=$mysqli->query("SELECT * FROM competencia");
                    while($valores=mysqli_fetch_array($query)){
                        echo '<option value="'.$valores[id_competencia].'">'.$valores[denominacion].'</option>';
                        }
                    ?>
                </select>
            </div>
          
          <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
          </div>

</div>
</div>
</div>
</div>
</form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM competencia, resultado where competencia.id_competencia=resultado.id_competencia";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                               <th>Resultado</th>
                               <th>Competencia</th>
                              
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_resultado']; ?></td>
                             <td><?php echo $key['denominacion_resultado']; ?></td>
                             <td><?php echo $key['denominacion']; ?></td>
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Duración</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal10" action="">Registrar Duración</button>
                  <form action="GuardarDuracion.php" method="post">
  <div class="modal fade" id="myModal10" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Duracion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <input type="text" name="lectiva" class="form-control" placeholder="Meses lectiva"></textarea>
            </div>  
            <div class="form-group">
          <input type="text" name="productiva" class="form-control" placeholder="Meses Productiva"></textarea>
            </div> 
          <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
          </div>

</div>
</div>
</div>
</div>
</form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                     <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM duracion ";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                               <th>Meses lectiva</th>
                               <th>Meses productiva</th>
                              
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_duracion']; ?></td>
                             <td><?php echo $key['meses_lectiva']; ?></td>
                             <td><?php echo $key['meses_productiva']; ?></td>
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tipos de formación</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal11" action="">Registrar Tipo de Formación</button>
                  <form action="GuardarTipo.php" method="post">
  <div class="modal fade" id="myModal11" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Tipo de Formacion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <input type="text" name="tipo" class="form-control" placeholder="Tipo">
            </div>  
           
          <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
          </div>

</div>
</div>
</div>
</div>
</form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">

                     <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM tipo";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                               <th>Tipo de formacion </th>
                              
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_tipo']; ?></td>
                             <td><?php echo $key['tipo']; ?></td>
                            
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Descripciones de las aulas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal12" action="">Registrar descripción de aula</button>
                  <form action="GuardarDescripcion.php" method="post">
                    <div class="modal fade" id="myModal12" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Descripcion</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <textarea  name="descripcion" class="form-control" placeholder="Descripcion"></textarea>
                              </div>            
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <?php
                              require_once "conexion/Conexion.php";
                            
                            $sql1="SELECT * FROM descripcion_aula";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                               <th>Descripción</th>
                              
                              

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_descripcion']; ?></td>
                             <td><?php echo $key['descripcion']; ?></td>
                            
                            </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>