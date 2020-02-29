function toggleEdits(el) {
    if (el.value == "off") {
        el.value="on";
        $("tr td").each(function () {
            if ($(this).hasClass("editable")) {
                this.onclick = function(){edit(this)};
            }
        });
    } else if (el.value == "on") {
        el.value="off";
        $("tr td").each(function () {
            if ($(this).hasClass("editable")) {
                this.onclick = function(){disable(this)};
            }
        });
    }
}

function edit(el) {
    el.childNodes[0].removeAttribute("disabled");
    el.childNodes[0].focus();
}

function disable(el) {
    el.setAttribute("disabled","");
    window.getSelection().removeAllRanges();
}
