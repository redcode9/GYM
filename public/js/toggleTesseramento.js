document.addEventListener("DOMContentLoaded", function toggleTesseramento() {
    document.getElementById('flagTesseramento').value = "on";
    $("#FormTesseramento").show();
    $("#continuaTesseramento").show();
    $("#indietroTesseramento").show();
    $("#continua").hide();
    $("#indietro").hide();
});

function toggleTesseramento() {
    if (document.getElementById('flagTesseramento').value === "off") {
        document.getElementById('flagTesseramento').value = "on";
        $("#FormTesseramento").show();
        $("#continuaTesseramento").show();
        $("#indietroTesseramento").show();
        $("#continua").hide();
        $("#indietro").hide();
    } else if (document.getElementById('flagTesseramento').value === "on") {
        document.getElementById('flagTesseramento').value = "off";
        $("#FormTesseramento").hide();
        $("#continuaTesseramento").hide();
        $("#indietroTesseramento").hide();
        $("#continua").show();
        $("#indietro").show();
    }
}
