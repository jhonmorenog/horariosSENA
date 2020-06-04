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

    <title>Horarios SENA  </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
  </head>

  <?php
  
  require_once 'menu.php';

?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                  <h3>Inicio</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2 col-sm-2  profile_left" style="margin-left: -50px;">
                     

                      <!-- start skills -->
                  
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">
                      <!-- start of user-activity-graph -->
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Respuestas</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Anuncios</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Perfil</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <img src="images/img3.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Johanna Cifuentes</h4>
                                  <blockquote class="message">Buen día señor coordinador la presente es para informar que el día de mañana no puedo presentarme en formación porque tengo cita médica, gracias</blockquote>
                                  <br />
                                  <div id="cnt_form">
                                    <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                                       <div class="form-group">
                                        <textarea name="mensaje" id="message"
                                        required="required" class="form-control" rows="8" placeholder="Mensaje..."></textarea></div>
                                         <div class="form-group">
                                      <button type="submit" class="btn btn-dark">Responder</button></div>
                                    </form>
                              </div>
                              </div>
                              </li>
                              <li>
                                <img src="images/img1.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Jhon moreno</h4>
                                  <blockquote class="message">Señor coordinador quisiera verificar mi horario pues tiene el nombre de otra persona</blockquote>
                                  <br />
                                  <div id="cnt_form">
                                    <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                                       <div class="form-group">
                                        <textarea name="mensaje" id="message"
                                        required="required" class="form-control" rows="8" placeholder="Mensaje..."></textarea></div>
                                  <button class="btn btn-dark">Responder</button>
                                </form>
                                </div>
                              </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                           <div class="col-md-6">
                            <div id="cnt_form">
                          <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                            <div class="form-group">
                              <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Nombre del evento"></div>
                               <div class="form-group">
                            
                              <textarea name="mensaje" id="message"
                              required="required" class="form-control" rows="8" placeholder="Asunto"></textarea></div>
                               <div class="form-group">
                            <button type="submit" class="btn btn-default" style="background-color: #73879C;color:#fff">Enviar</button></div>
                         
                        </form>
                            <!-- end user projects -->
                              </div>
                               </div>
                          </div>
                          

                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                            <div class="col-md-4">
                            <?php
                                  require_once '../utili/Conexion.php';
                                  $email=$_SESSION['correo'];
                                  $query=$mysqli->query("SELECT documento FROM persona where email='$email'");
                                  if ($query->num_rows>=1){
                                  foreach ($query as $key) {
                                  $key['documento'];}}?>
                    <form action="ActualizarPersona.php?documento=<?php echo $key['documento']?>" method="POST">
                        <div class="form-group">
                           <label for="nombre"> Nombre: </label>
                           <input name="nombre" type="text" class="form-control" ></div>
               <div class="form-group">
                   <label for="apellido"> Apellido: </label>
                  <input name="apellido" type="text" class="form-control" >
                </div>
                 <div class="form-group">
                     <label for="clave"> Clave: </label>
                   <input name="clave" type="password" class="form-control" >
                   </div>
                <div class="form-group">
               <button class="btn btn-default" style="background-color: #73879C;color:#fff"  name="actualizar" type="submit">Actualizar</button>
      
                  </div>
                  </form>
                            
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
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Horarios SENA by ADSI
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
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>