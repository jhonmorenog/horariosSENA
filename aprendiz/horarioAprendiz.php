<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SENTIME</title>

        <!-- Bootstrap -->
        <link href="../vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendor/nprogress/nprogress.css" rel="stylesheet">


        <!-- Custom styling plus plugins -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />

        <script type="text/javascript">
            
            function ajax() {

                var tri = document.getElementById("tri").value;
                var anio = document.getElementById("anio").value;
                var url = "horarios.php?t=" + tri + "&a=" + anio;
               
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                       var horarios=this.responseText;
                        document.getElementById("horariosAjax").innerHTML =horarios;
                        document.getElementById("h").value =horarios;
                                
                    }
                };

                xhttp.open("GET", url, true);
                xhttp.send();
            }
        </script>
    </head>

    <body class="nav-md" onload="ajax()">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">


                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                       
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->

                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Mi Horario </h3>
                            </div>

                            <div class="title_right">

                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <div class="container">   
                                            
                                            
                                            


                                            <div class="table-responsive">

                                                <div id="horariosAjax">

                                                </div>
                                                <form action="../utili/creaPDF.php" method="post">
                                                    <input type="hidden" value="" name="h" id="h" />
                                                    <input type="submit" value="PDF" name="creaPDF" />
                                                </form>
                                                
                                                
                                                <p>El trimestre  del año</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <footer>
                <div class="pull-right">
                    SENTIME by ADSI</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
        <!-- jQuery -->
        <script src="../vendor/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../vendor/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendor/nprogress/nprogress.js"></script>
        <!-- FullCalendar -->
        <script src="../vendor/moment/min/moment.min.js"></script>



        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>



    </body>
</html>