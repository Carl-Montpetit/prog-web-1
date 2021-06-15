function openForm() {
  createForm = document.getElementById("createAccountForm");
  createForm.style.display = "inline";
}

function connect() {
  connectForm = document.getElementById("connectForm");
  connectForm.style.display = "inline";
}

function disconnect() {
  loggedInButton = document.getElementById("nomLogin");
  loginButton = document.getElementById("monCompte");
  loggedInButton.style.display = "none";
  loginButton.style.display = "inline-block";
}

function validateAccount() {
  connectForm = document.getElementById("connectForm");
  loginButton = document.getElementById("monCompte");
  loggedInButton = document.getElementById("nomLogin");
  connectForm.style.display = "none";
  loginButton.style.display = "none";
  userName = String(document.getElementById("prenom").value) + ' <i class="fa fa-child" ></i>';
  document.getElementById("userName").innerHTML = userName;
  loggedInButton.style.display = "inline-block";
}

function validateCreateAccount(pw, pw2) {
  if (pw === pw2) {
    createForm = document.getElementById("createAccountForm");
    loginButton = document.getElementById("monCompte");
    loggedInButton = document.getElementById("nomLogin");
    createForm.style.display = "none";
    loginButton.style.display = "none";
    userName = String(document.getElementById("prenom").value) + ' <i class="fa fa-child" ></i>';
    document.getElementById("userName").innerHTML = userName;
    loggedInButton.style.display = "inline-block";
  } else {
      invalidPw();
  }
}

function invalidPw() {
  var alert = document.getElementById("pwDoesNotMatch");
  alert.style.display = "inline";
}