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
                                <h3>Información para la creación de horarios</h3>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Aula</th>
                                                                <th>Descripción</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>503</td>
                                                                <td>Salón de audiovisuales</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>102</td>
                                                                <td>Salón empresarial</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>301</td>
                                                                <td>ADSI desarrollo del software</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>103</td>
                                                                <td>Impresión digital</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>107</td>
                                                                <td>Biblioteca</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                                        <thead>
                                                            <tr> 
                                                                <th>Id</th>
                                                                <th>Sede</th>
                                                                <th>Dirección</th>
                                                                <th>Centro</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Cenigraf</td>
                                                                <td>Cll. 15 #31-42, Bogotá</td>
                                                                <td>Complejo paloquemao</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                        </tbody>
                                                    </table>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nombre del centro</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Complejo paloquemao</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Numero de programa</th>
                                                                <th>Denominacion</th>
                                                                <th>Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Análisis y desarrollo de sistemas de información</td>
                                                                <td>Tecnólogo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Sistemas</td>
                                                                <td>Técnico</td></tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Encuadernación</td>
                                                                <td>Tecnólogo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Impresión multimedia</td>
                                                                <td>Técnico</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Número de ficha</th>
                                                                <th>Ingreso</th>
                                                                <th>Salida</th>
                                                                <th>Programa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1828917</td>
                                                                <td>15/02/2019 </td>
                                                                <td>21/01/2021</td>
                                                                <td>ADSI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1852649</td>
                                                                <td>15/02/2019</td>
                                                                <td>15/06/2019</td>
                                                                <td>Sistemas</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1248654</td>
                                                                <td>15/02/2019</td>
                                                                <td>21/01/2021</td>
                                                                <td>Encuadernación</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1235987</td>
                                                                <td>15/06/2019</td>
                                                                <td>21/01/2020</td>
                                                                <td>Impresión multimedia</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id bloque</th>
                                                                <th>Instructor</th>
                                                                <th>Día</th>
                                                                <th>Año</th>
                                                                <th>Trimestre</th>
                                                                <th>Rango de hora</th>
                                                                <th>Ficha</th>
                                                                <th>Aula</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Johanna Cifuentes</td>
                                                                <td>Viernes</td>
                                                                <td>2019</td>
                                                                <td>3</td>
                                                                <td>6:00-7:40</td>
                                                                <td>1828917</td>
                                                                <td>301</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Jhon Moreno</td>
                                                                <td>Jueves</td>
                                                                <td>2019</td>
                                                                <td>4</td>
                                                                <td>6:00-7:40</td>
                                                                <td>1564426</td>
                                                                <td>105</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Carlos Salcedo</td>
                                                                <td>Miércoles</td>
                                                                <td>18:00-19:40</td>
                                                                <td>2019</td>
                                                                <td>5</td>
                                                                <td>12484234</td>
                                                                <td>503</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


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

                        <div class="clearfix"></div>        </footer>
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