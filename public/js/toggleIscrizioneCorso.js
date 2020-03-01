$("document").ready(function () {
    document.getElementById('flagCorso').value = "on";
    $("#BodyIscrizioneCorso").show();
    document.getElementById('noCorso').style.marginTop = "0%";
    document.getElementById("terminaCorso").disabled = true;
});

function toggleIscrizioneCorso() {
    if (document.getElementById('flagCorso').value === "off") {
        document.getElementById('flagCorso').value = "on";
        $("#BodyIscrizioneCorso").show();
        document.getElementById('noCorso').style.marginTop = "0%";
    } else if (document.getElementById('flagCorso').value === "on") {
        document.getElementById('flagCorso').value = "off";
        $("#BodyIscrizioneCorso").hide();
        document.getElementById('noCorso').style.marginTop = "27.5%";
    }
}

function checkedCorsi() {
    var checkedNum = $('input[name="group[]"]:checked').length;
    if (checkedNum > 1) {
        document.getElementById('divSconto').style.opacity = "1";
    } else {
        document.getElementById('divSconto').style.opacity = "0";
    }
}
