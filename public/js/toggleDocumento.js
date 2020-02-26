document.addEventListener("DOMContentLoaded", function toggleDocumento() {
    document.getElementById('tipoDocumento').disabled = true;
    document.getElementById('numeroDocumento').disabled = true;
    document.getElementById('stampa').disabled = true;
    document.getElementById('tipoDocumento').options[document.getElementById('tipoDocumento').selectedIndex].value = "";
    document.getElementById('flagDocumento').value = "off";
});

function toggleDocumento() {
    if (document.getElementById('flagDocumento').value === "off") {
        document.getElementById('tipoDocumento').disabled = false;
        document.getElementById('numeroDocumento').disabled = false;
        if (document.getElementById('tipoDocumento').options[document.getElementById('tipoDocumento').selectedIndex].value !== "") {
            document.getElementById('stampa').disabled = false;
        } else {
            document.getElementById('stampa').disabled = true;
        }
        document.getElementById("tipoDocumento").required = true;
        document.getElementById('flagDocumento').value = "on";
    } else if (document.getElementById('flagDocumento').value === "on") {
        document.getElementById('tipoDocumento').disabled = true;
        document.getElementById('numeroDocumento').disabled = true;
        document.getElementById('stampa').disabled = true;
        document.getElementById("tipoDocumento").required = false;
        document.getElementById('tipoDocumento').options[document.getElementById('tipoDocumento').selectedIndex].value = "";
        document.getElementById('flagDocumento').value = "off";
    }
}

function toggleStampa() {
    if (document.getElementById('tipoDocumento').options[document.getElementById('tipoDocumento').selectedIndex].value !== "") {
        document.getElementById('stampa').disabled = false;
    } else {
        document.getElementById('stampa').disabled = true;
    }
}
