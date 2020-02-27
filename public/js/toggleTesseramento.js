document.addEventListener("DOMContentLoaded", function toggleTesseramento() {
    document.getElementById('flagTesseramento').value = "on";
    $("#socioCollab").show();
    $("#FormTesseramento").show();
    $("#continuaTesseramento").show();
    $("#indietroTesseramento").show();
    $("#FormNoTess").hide();
    $("#termina").hide();
    $("#indietro").hide();
});

function toggleTesseramento() {
    if (document.getElementById('flagTesseramento').value === "off") {
        document.getElementById('flagTesseramento').value = "on";
        $("#socioCollab").show();
        $("#FormTesseramento").show();
        $("#continuaTesseramento").show();
        $("#indietroTesseramento").show();
        $("#FormNoTess").hide();
        $("#termina").hide();
        $("#indietro").hide();
        document.getElementById("option1").required = true;
        document.getElementById("option2").required = true;
        document.getElementById("emissione").required = true;
        document.getElementById("scadenza").required = true;
        document.getElementById("pagamento").required = true;
    } else if (document.getElementById('flagTesseramento').value === "on") {
        document.getElementById('flagTesseramento').value = "off";
        $("#socioCollab").hide();
        $("#FormTesseramento").hide();
        $("#continuaTesseramento").hide();
        $("#indietroTesseramento").hide();
        $("#FormNoTess").show();
        $("#termina").show();
        $("#indietro").show();
        document.getElementById("option1").required = false;
        document.getElementById("option2").required = false;
        document.getElementById("emissione").required = false;
        document.getElementById("scadenza").required = false;
        document.getElementById("pagamento").required = false;
        document.getElementById("tipoDocumento").required = true;
    }
}
