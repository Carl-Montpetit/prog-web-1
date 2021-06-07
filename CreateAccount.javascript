function validateCreateAccount(pw, pw2) {
    if (pw === pw2) {
        window.close('','_parent','');
        open(href="ProgWeb.html", "", "width=500,height=400");   
    } else {
        invalidPw();
    }
}

function invalidPw() {
    var alert = document.getElementById("pwDoesNotMatch");
    alert.style.display = "inline";
}