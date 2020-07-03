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
<script type="text/javascript">

    function actuaform(datos) {
        d = datos.split('||');
        $('#numero_fichau').val(d[0]);
        $('#iniciou').val(d[1]);
        $('#finalu').val(d[2]);
        $('#jornadau').val(d[3]);
    }
    function agregaform(datos) {
        d = datos.split('||');
        $('#idu').val(d[0]);
        $('#descripcionu option[value=' + d[1] + ']').attr('selected', 'selected');
        $('#sedeu option[value=' + d[2] + ']').attr('selected', 'selected');

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


