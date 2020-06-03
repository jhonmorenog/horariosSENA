<?php
  
   require_once '../utili/sesion.php';

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
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
     <script type="text/javascript">
        function estadoh(datos){
      d=datos.split('||');
      $('#idh').val(d[0]);
      $('#idht').val(d[0]);
      $('#idhr').val(d[0]);
      $('#idha').val(d[0]);
      $('#idhn').val(d[0]);
      }
      function estadod(datos){
      d=datos.split('||');
      $('#idd').val(d[0]);
      $('#iddt').val(d[0]);
      $('#iddr').val(d[0]);
      $('#idda').val(d[0]);
      $('#iddn').val(d[0]);
      }
    </script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                <span>Bienvenido</span>
                <h2><?php echo $_SESSION['user'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                 <li><a href="profile.php"><i class="fa fa-laptop"></i> Inicio</a></li>
                    <li><a href="calendar.php"><i class="fa fa-calendar"></i>Calendario</a></li>
                     <li><a><i class="fa fa-info-circle"></i> Información</a><ul class="nav child_menu">
                      <li><a href="aulas.php">Aulas</a></li>
                      <li><a href="sedes.php">Sedes</a></li>
                      <li><a href="centros.php">Centros</a></li>
                      <li><a href="programas.php">Programas</a></li>
                      <li><a href="fichas.php">Fichas</a></li>
                      <li><a href="bloques.php">Bloques</a></li>
                      <li><a href="formaciones.php">Formaciones</a></li>
                      <li><a href="competencias.php">Competencias</a></li>
                      <li><a href="resultados.php">Resultados</a></li>
                      <li><a href="duraciones.php">Duraciones</a></li>
                      <li><a href="tipos.php">Tipos de formación</a></li>
                      <li><a href="descripciones.php">Descripción de aula</a></li>
                    </ul></li>
                      <li><a href="contacts.php"><i class="fa fa-users"></i> Instructores</a></li>
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
                      <a class="dropdown-item"  href="profile.php"> Perfil</a>
                        
                      <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
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
                            <strong>Todas las notificaciones</strong>
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
            </div>

            <div class="clearfix"></div>

           
            <div class="row">
    

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
                                <table id="datatable2" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Aula</th>    
                              <th>Rango de horas</th> 
                              <th>Día</th>
                              <th>Trimestre</th>
                              <th>Año</th>
                              <th>Ficha</th>
                              <th>Instructor</th>
                             <th>Actualizar</th>
                              <th>Habilitar/Deshabilitar</th>

                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                             ?>
                             <tr>
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['rango_horas']; ?></td>
                            <td><?php echo mb_strtoupper($key['dia']);?></td>
                            <td><?php echo $key['trimestre']; ?></td>
                            <td><?php echo $key['anio']; ?></td>
                            <td><?php echo $key['numero_ficha']; ?></td>
                            <td><?php echo mb_strtoupper($key['nombre']);?></td>
                             <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModal" action=""><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                </td>
                                <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px"></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                                </td>
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
              <form action="DeshabilitarBloque.php" method="post"> 
                    <div class="modal fade" id="dataDeshabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Bloque</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="text"  name="idd" id="idd" hidden="" >
                                <input type="number"  name="iddt" id="iddt" hidden="" >
                                <input type="number"  name="iddr" id="iddr" hidden="" >
                                <input type="number"  name="idda" id="idda" hidden="" >
                                <input type="number"  name="iddn" id="iddn" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere deshabilitar el bloque?</label>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <form action="HabilitarBloque.php" method="post"> 
                    <div class="modal fade" id="dataHabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Habilitar Bloque</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                                <input type="number"  name="idht" id="idht" hidden="" >
                                <input type="number"  name="idhr" id="idhr" hidden="" >
                                <input type="number"  name="idha" id="idha" hidden="" >
                                <input type="number"  name="idhn" id="idhn" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere habilitar el bloque?</label>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Habilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
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