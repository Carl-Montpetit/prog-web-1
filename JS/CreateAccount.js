function validateCreateAccount(pw, pw2) {
    if (pw === pw2) {
        window.close('','_parent','');
        navLogin();   
    } else {
        invalidPw();
    }
}

function invalidPw() {
    var alert = document.getElementById("pwDoesNotMatch");
    alert.style.display = "inline";
}