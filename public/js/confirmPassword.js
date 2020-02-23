function validatePassword() {
    if (document.getElementById("password").value != document.getElementById("repeatPassword").value) {
        document.getElementById("repeatPassword").setCustomValidity("La password non coincide. Riprova.");
        document.getElementById("repeatPassword").value = "";
    } else {
        document.getElementById("repeatPassword").setCustomValidity('');
    }
}
