document.addEventListener("DOMContentLoaded", function toggleTesseramento() {
    document.getElementById('flagTesseramento').value = "on";
    $("#FormTesseramento").show();
    $("#continuaTesseramento").show();
    $("#indietroTesseramento").show();
    $("#termina").hide();
    $("#indietro").hide();
});

function toggleTesseramento() {
    if (document.getElementById('flagTesseramento').value === "off") {
        document.getElementById('flagTesseramento').value = "on";
        $("#FormTesseramento").show();
        $("#continuaTesseramento").show();
        $("#indietroTesseramento").show();
        $("#termina").hide();
        $("#indietro").hide();
        document.getElementById("emissione").required = true;
        document.getElementById("scadenza").required = true;
        document.getElementById("pagamento").required = true;
    } else if (document.getElementById('flagTesseramento').value === "on") {
        document.getElementById('flagTesseramento').value = "off";
        $("#FormTesseramento").hide();
        $("#continuaTesseramento").hide();
        $("#indietroTesseramento").hide();
        $("#termina").show();
        $("#indietro").show();
        document.getElementById("emissione").required = false;
        document.getElementById("scadenza").required = false;
        document.getElementById("pagamento").required = false;
        document.getElementById("tipoDocumento").required = true;
    }
}
