document.addEventListener("DOMContentLoaded", function toggleInsegnante() {
    document.getElementById("divInsegnante").style.display = "none";
    document.getElementById('flagInsegnante').value = "off";
});

function toggleInsegnante() {
    if (document.getElementById('flagInsegnante').value === "off") {
        document.getElementById("divInsegnante").style.display = "block";
        document.getElementById("insegnante").required = true;
        document.getElementById('flagInsegnante').value = "on";
    } else if (document.getElementById('flagInsegnante').value === "on") {
        document.getElementById("divInsegnante").style.display = "none";
        document.getElementById("insegnante").required = false;
        document.getElementById('flagInsegnante').value = "off";
    }
}
