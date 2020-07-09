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
    function formsede(datos) {
        d = datos.split('||');
        $('#nombreu').val(d[0]);
        $('#idu').val(d[1]);
        $('#direccionu').val(d[2]);
        $('#centrou option[value=' + d[3] + ']').attr('selected', 'selected');
    }

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
        $('#aulab option[value=' + d[0] + ']').attr('selected', 'selected');
        $('#rangob option[value=' + d[1] + ']').attr('selected', 'selected');
        $('#diab option[value=' + d[2] + ']').attr('selected', 'selected');
        $('#trimestreb option[value=' + d[3] + ']').attr('selected', 'selected');
        $('#aniob').val(d[4]);
        $('#fichab option[value=' + d[5] + ']').attr('selected', 'selected');
        $('#documentob option[value=' + d[6] + ']').attr('selected', 'selected');
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


