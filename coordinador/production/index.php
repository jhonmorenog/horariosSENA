<!DOCTYPE html>
<html lang="en">
    <?php require_once "head.php" ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                
                <?php require_once "menu.php" ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- top tiles -->
                    <div class="col-md-12" style="height: 100px;">
                        <br />
                        <h1>Principal</h1>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <!-- start of user-activity-graph -->
                        <!-- end of user-activity-graph -->

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Respuestas</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Eventos</a>
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
                                                            <div class="form-group">
                                                                <textarea name="mensaje" id="message"
                                                                          required="required" class="form-control" rows="8" placeholder="Mensaje...">

                                                                </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-dark">Responder</button>
                                                            </div>
                                                        </div>
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
                                                            <div class="form-group">
                                                                <textarea name="mensaje" id="message"
                                                                          required="required" class="form-control" rows="8" placeholder="Mensaje...">

                                                                </textarea>
                                                            </div>
                                                            <button class="btn btn-dark">Responder</button>
                                                        </div>
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
                                                    <div class="form-group">
                                                        <textarea name="mensaje" id="message"
                                                                  required="required" class="form-control" rows="8" placeholder="Asunto"></textarea></div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Enviar</button></div>
                                                    <!-- end user projects -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                                        photo booth letterpress, commodo enim craft beer mlkshk </p>
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
        <!-- gauge.js -->
        <script src="../../vendor/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../../vendor/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../../vendor/skycons/skycons.js"></script>
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
        <!-- JQVMap -->
        <script src="../../vendor/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../../vendor/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../../vendor/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../../vendor/moment/min/moment.min.js"></script>
        <script src="../../vendor/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../../build/js/custom.min.js"></script>

    </body>
</html>
