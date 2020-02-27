document.addEventListener("DOMContentLoaded", function toggleIscrizioneCorso() {
    document.getElementById('flagCorso').value = "on";
    $("#BodyIscrizioneCorso").show();
    document.getElementById('noCorso').style.marginTop = "0%";
    $("#divSconto").show();
    $("#terminaCorso").show();
    $("#indietroCorso").show();
    $("#termina").hide();
    $("#indietro").hide();
});

function toggleIscrizioneCorso() {
    if (document.getElementById('flagCorso').value === "off") {
        document.getElementById('flagCorso').value = "on";
        $("#BodyIscrizioneCorso").show();
        document.getElementById('noCorso').style.marginTop = "0%";
        $("#divSconto").show();
        $("#terminaCorso").show();
        $("#indietroCorso").show();
        $("#termina").hide();
        $("#indietro").hide();
    } else if (document.getElementById('flagCorso').value === "on") {
        document.getElementById('flagCorso').value = "off";
        $("#BodyIscrizioneCorso").hide();
        document.getElementById('noCorso').style.marginTop = "27.5%";
        $("#divSconto").hide();
        $("#terminaCorso").hide();
        $("#indietroCorso").hide();
        $("#termina").show();
        $("#indietro").show();
    }
}
