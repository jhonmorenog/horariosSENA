<!DOCTYPE html>
<html lang="en">
    <?php require_once "head.php" ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                
                <?php require_once "menu.php" ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Información personal</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_title">

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <span class="section">Tus datos</span>
                                        <div class="col-md-6 offset-md-3">
                                            <button id="send" type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Cambiar datos</button>
                                        </div>
                                        <div id="myModal1" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Perfil de instructor</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal form-label-left" novalidate>
                                                            <span class="section">Editar mi información</span>

                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nombre 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ejemplo: edi jhon"  type="text">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                                                                </label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="email" id="email" name="email"  class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirmar Email <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="item form-group">
                                                                <label for="password" class="col-form-label col-md-3 label-align">Contraseña</label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control" >
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label for="password2" class="col-form-label col-md-3 col-sm-3 label-align ">Confirmar contraseña</label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">Telefono 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <input type="tel" id="telephone" name="phone"  data-validate-length-range="8,20" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 offset-md-3">
                                                                    <button type="submit" class="btn btn-primary">Cancelar</button>
                                                                    <button id="send" type="submit" class="btn btn-success">Actualizar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
            <script src="../../vendors/DateJS/build/date.js"></script>
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
