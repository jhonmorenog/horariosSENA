<?php 
require_once '../util/sesion.php';
?>
<!doctype html>
<html>
    <head>
        <?php
        require_once '../general/header.php';
        
        ?>
    </head>
    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <?php
                require_once './menu/menu.php';
                ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3 id="sitio" style="text-transform: uppercase;"></h3>
                            </div>

                            <div class="title_right">

                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <!-- muestra el contenido para gestionar -->
                        <div class="row" id="ventana">

                        </div>
                    </div>
                </div>

                <?php
                require_once '../general/footer.php';
                require_once '../general/scripts.php';
                ?>
            </div>
        </div>
    </body>
</html>