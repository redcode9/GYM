/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdownmenu() {
    document.getElementById("dropdowncontent").classList.toggle("showcontent");
    document.getElementById("dropdownbtn").classList.toggle("borderbottom-style");
}

$("document").ready(function () {
    $(function () {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $("nav a").each(function () {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
                if ($(this).parent().hasClass('dropdown-content')) {
                    $('#dropdowncontent').addClass('showcontent');
                    $('#dropdownbtn').addClass('borderbottom-style');
                } else {
                    $('#dropdowncontent').removeClass('showcontent');
                    $('#dropdownbtn').removeClass('borderbottom-style');
                }
            }
        });
    });
});
