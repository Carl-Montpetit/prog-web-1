function showCover() {
  let coverDiv = document.createElement('div');
  coverDiv.id = 'cover-div';


  document.body.style.overflowY = 'hidden';

  document.body.append(coverDiv);
}

function hideCover() {
  document.getElementById('cover-div').remove();
  document.body.style.overflowY = '';
}

function showPrompt(divConnect, formConnect, callback) {
  showCover();
  let form = document.getElementById(formConnect);
  let container = document.getElementById(divConnect);

  function complete(value) {
    hideCover();
    container.style.display = 'none';
    document.onkeydown = null;
    callback(value);
  }

  form.onsubmit = function() {
    let value = form.prenom.value;
    var anonymousObjects = document.getElementsByClassName("anonymous");
    var i;
    for (i = 0; i < anonymousObjects.length; i++) {
      anonymousObjects[i].style.display = "none";
    }
    var loggedInObjects = document.getElementsByClassName("loggedIn");
    for (i = 0; i < loggedInObjects.length; i++) {
      loggedInObjects[i].style.display = "inline-block";
    }
    complete(value);
    return false;
  };

  container.style.display = 'block';
  form.elements.text.focus();
}

function connect(divConnect, formConnect) {
  showPrompt(divConnect, formConnect, function(value) {
    value = value + ' <i class="fa fa-child" ></i>';
    document.getElementById("monCompteButton").innerHTML = value;
  });
}

function disconnect() {
  document.getElementById("monCompteButton").innerHTML = "Mon Compte" + ' <i class="fa fa-child" ></i>';
  var anonymousObjects = document.getElementsByClassName("anonymous");
  var i;
  for (i = 0; i < anonymousObjects.length; i++) {
    anonymousObjects[i].style.display = "inline-block";
  }
  var loggedInObjects = document.getElementsByClassName("loggedIn");
  for (i = 0; i < loggedInObjects.length; i++) {
    loggedInObjects[i].style.display = "none";
  }
}

function invalidPw() {
  var alert = document.getElementById("pwDoesNotMatch");
  alert.style.display = "inline";
}

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
  item = document.getElementById(data);
  item.childNodes[3].remove();
  item.childNodes[4].remove();
  item.childNodes[5].remove();
  if (item.childNodes.length > 8) {
    item.childNodes[6].remove();
    item.childNodes[7].remove();
  }
  item.style.height = "20px";
}