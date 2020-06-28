<?php 
@session_start();
?>
<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <div class="container">   
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="Trimestre"> Trimestre </label>
                        <input type="number" class="form-control" id="tri">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="anio"> Año </label>
                        <input type="number" class="form-control" id="anio">
                    </div>
                </div>
                <?php if ($_SESSION['rol'] == "Administrador" ||$_SESSION['rol'] == "Coordinador") { ?>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="doc"> Instructor </label>
                        <select  class="form-control" id="doc" name="doc">
                            <option value="1335">Juan</option>
                        </select>
                    </div>
                </div>
                <?php }?>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <button class="btn btn-primary form-control" onclick="ajax()">Buscar</button>
                    </div>
                </div>


                <div class="table-responsive">

                    <div id="horariosAjax">

                    </div>
                    <form action="../utili/creaPDF.php" method="post">
                        <input type="hidden" value="" name="h" id="h" />
                        <input class="btn btn-danger" type="submit" value="Generar PDF" name="creaPDF" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>