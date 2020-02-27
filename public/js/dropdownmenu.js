/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdownmenuiscrizioni() {
    document.getElementById("dropdowncontentiscrizioni").classList.toggle("showcontent");
    document.getElementById("dropdownbtniscrizioni").classList.toggle("borderbottom-style");
    document.body.classList.toggle('add-iscrizioni-height');
    if ($('#dropdowncontentgestioni').hasClass("showcontent")) {
        document.body.classList.toggle('add-iscrizioni-height');
        document.body.classList.toggle('add-gestioni-height');
        document.body.classList.toggle("add-both-height");
    }
}

function dropdownmenugestioni() {
    document.getElementById("dropdowncontentgestioni").classList.toggle("showcontent");
    document.getElementById("dropdownbtngestioni").classList.toggle("borderbottom-style");
    document.body.classList.toggle('add-gestioni-height');
    if ($('#dropdowncontentiscrizioni').hasClass("showcontent")) {
        document.body.classList.toggle('add-gestioni-height');
        document.body.classList.toggle('add-iscrizioni-height');
        document.body.classList.toggle('add-both-height');
    }
}


$("document").ready(function () {
    $(function () {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $("#navmenu a").each(function () {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("menuactive");
                if ($(this).parent().is('#dropdowncontentiscrizioni')) {
                    $('#dropdowncontentiscrizioni').addClass('showcontent');
                    $('#dropdownbtniscrizioni').addClass('borderbottom-style');
                    document.body.classList.add('add-iscrizioni-height');
                }
                if ($(this).parent().is('#dropdowncontentgestioni')) {
                    $('#dropdowncontentgestioni').addClass('showcontent');
                    $('#dropdownbtngestioni').addClass('borderbottom-style');
                    document.body.classList.add('add-gestioni-height');
                }
            }
        });
    });
});
