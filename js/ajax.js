function ventana(ruta) {

    getNombreSitio(ruta);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ventana").innerHTML =this.responseText;
        }
    };
    xhttp.open("GET", "gestion/" + ruta + ".php", true);
    xhttp.send();
}



function ajax() {

    var tri = document.getElementById("tri").value;
    var anio = document.getElementById("anio").value;
    try {
        var ins = document.getElementById("doc").value;
    } catch (error) {
        ins = "";
    }
    var url = "gestion/consultahorarios.php?t=" + tri + "&a=" + anio + "&doc=" + ins;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var horarios = this.responseText;
            document.getElementById("horariosAjax").innerHTML = horarios;
            document.getElementById("h").value = horarios;

        }
    };

    xhttp.open("GET", url, true);
    xhttp.send();
}
    