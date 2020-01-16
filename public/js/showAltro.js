function showAltro() {
    if (document.getElementById('tipologia').options[document.getElementById('tipologia').selectedIndex].value === "Al") {
        document.getElementById("divAltro").style.display = "block";
        document.getElementById("altro").required = true;
    } else {
        document.getElementById("divAltro").style.display = "none";
        document.getElementById("altro").required = false;
    }
}
