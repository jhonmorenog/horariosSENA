<!-- /footer content -->

<!-- jQuery -->

<script src="../js/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap/dist/bootstrap.bundle.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="../js/build/custom.min.js"></script>
<script src="../js/ajax.js"></script>
<script type="text/javascript">
    function getNombreSitio(sitio) {
        document.getElementById("sitio").innerHTML = sitio;
    }
    getNombreSitio("Inicio");
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">

    function actuaform(datos) {
        d = datos.split('||');
        $('#numero_fichau').val(d[0]);
        $('#iniciou').val(d[1]);
        $('#finalu').val(d[2]);
        $('#programau').val(d[3]);
        $('#jornadau').val(d[4]);

    }
    function agregaform(datos) {
        d = datos.split('||');
        $('#idu').val(d[0]);
        $('#descripcionu option[value=' + d[1] + ']').attr('selected', 'selected');
        $('#sedeu option[value=' + d[2] + ']').attr('selected', 'selected');

    }

    function llenaform(datos) {
        d = datos.split('||');
        $('#aulab').var(d[0]);
        $('#rangob').val(d[1]);
        $('#diab').val(d[2]);
        $('#trimestreb').val(d[3]);
        $('#aniob').val(d[4]);
        $('#fichab') .val(d[5]);
        $('#documentob').val(d[6]);
    }
    function delet(datos) {
        d = datos.split('||');
        $('#ide').val(d[0]);
    }
    function estadoh(datos) {
        d = datos.split('||');
        $('#idh').val(d[0]);

    }
    function estadod(datos) {
        d = datos.split('||');
        $('#idd').val(d[0]);
    }

</script>


