createForm = document.getElementById("createAccountForm");
loginButton = document.getElementById("monCompte");
loggedInButton = document.getElementById("nomLogin");



function openForm() {
  createForm.style.display = "inline";
}

function validateCreateAccount(pw, pw2) {
  if (pw === pw2) {
    createForm.style.display = "none";
    loginButton.style.display = "none";
    userNaame = String(document.getElementById("prenom").value) + ' <i class="fa fa-child" ></i>';
    document.getElementById("userName").innerHTML = userNaame;
    loggedInButton.style.display = "inline-block";
  } else {
      invalidPw();
  }
}

function invalidPw() {
  var alert = document.getElementById("pwDoesNotMatch");
  alert.style.display = "inline";
}

function getUserName() {
  return userName;
}