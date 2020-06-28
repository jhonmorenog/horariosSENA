<div class="top_tiles">
    <?php
    require_once '../../../util/Conexion.php';
    $sql1 = "SELECT * FROM `aulas`";
    $query = $mysqli->query($sql1);
    if ($query->num_rows >= 1) {
        ?>
        <?php foreach ($query as $key) {
            ?>

            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6">
                <div class="tile-stats">
                    <div class="count"><?php echo $key['denominacion']; ?></div>
                    <h3><?php echo $key['id_programa']; ?></h3>
                    <a href=""><p>Competencias y resultados</p></a>
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