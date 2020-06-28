<div class="top_tiles">
    <?php
    require_once '../../../util/Conexion.php';
    $sql1 = "SELECT numero_ficha, denominacion, denominacion_nivel FROM ficha inner join"
            . " programa_ficha pf on ficha.numero_ficha=pf.fichanumero_ficha inner join "
            . "programa on programa.id_programa=pf.id_programa INNER JOIN "
            . "nivel_formacion on programa.id_formacion=nivel_formacion.id_nivel order by numero_ficha desc";
    $query = $mysqli->query($sql1);
    if ($query->num_rows >= 1) {
        ?>
        <?php foreach ($query as $key) {
            ?>
            <div class="animated flipInY col-lg-8  col-sm-4 ">
                <div class="tile-stats">
                    <div class="count"><?php echo $key['numero_ficha']; ?></div>
                    <h3><?php echo $key['denominacion']; ?></h3>
                    <p><?php echo $key['denominacion_nivel']; ?></p>
                </div>
            </div>


        <?php }
        ?>
    <?php
    } else {
        echo "Tabla vacía";
    }
    ?>
</div>