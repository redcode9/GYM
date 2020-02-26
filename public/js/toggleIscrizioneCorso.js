document.addEventListener("DOMContentLoaded", function toggleIscrizioneCorso() {
    document.getElementById('flagCorso').value = "on";
    $("#BodyIscrizioneCorso").show();
    $("#divSconto").show();
    $("#continuaCorso").show();
    $("#indietroCorso").show();
    $("#continua").hide();
    $("#indietro").hide();
});

function toggleIscrizioneCorso() {
    if (document.getElementById('flagCorso').value === "off") {
        document.getElementById('flagCorso').value = "on";
        $("#BodyIscrizioneCorso").show();
        $("#divSconto").show();
        $("#continuaCorso").show();
        $("#indietroCorso").show();
        $("#continua").hide();
        $("#indietro").hide();
    } else if (document.getElementById('flagCorso').value === "on") {
        document.getElementById('flagCorso').value = "off";
        $("#BodyIscrizioneCorso").hide();
        $("#divSconto").hide();
        $("#continuaCorso").hide();
        $("#indietroCorso").hide();
        $("#continua").show();
        $("#indietro").show();
    }
}
