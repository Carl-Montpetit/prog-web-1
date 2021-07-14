function allowDrop( ev ) {
    ev.preventDefault();
}

function drag( ev ) {
    ev.dataTransfer.setData( "text",ev.target.id );
}

function drop( ev ) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData( "text" );
    ev.target.appendChild( document.getElementById( data ) );
    item = document.getElementById( data );
    item.childNodes[ 3 ].remove();
    item.childNodes[ 4 ].remove();
    item.childNodes[ 5 ].remove();
    if ( item.childNodes.length > 8 ) {
        item.childNodes[ 6 ].remove();
        item.childNodes[ 7 ].remove();
    }
    item.style.height = "20px";
    cartText = document.getElementById("cartText");
    cartText.style.display = 'none';
}

function addProgram() {
  var td = document.createElement('td');
  document.getElementById("addNewPrograms").appendChild(td);
  section = document.createElement('section');
  section.setAttribute('class', 'relativeObjects');
  section.setAttribute('draggable', 'true');
  section.setAttribute('ondragstart', 'drag(event)');
  td.appendChild(section);
  button = document.createElement('button');
  button.setAttribute('class','plusButton');
  button.setAttribute('onclick','namePrompt()');
  section.appendChild(button);
  var plus = document.createElement('i');
  plus.setAttribute('class','fa fa-plus');
  button.appendChild(plus);
}

function namePrompt() {
  var programName = prompt("Nom du programme");
  if(programName != null) {
    document.getElementsByClassName('plusButton')[0].removeAttribute('onclick');
    var h2 = document.createElement('h2');
    h2Text = document.createTextNode(programName);
    h2.appendChild(h2Text);
    section.appendChild(h2);
    h2.parentNode.insertBefore(h2, h2.previousElementSibling);
    button.setAttribute('onclick','pricePrompt()');
  }
}

function pricePrompt() {
  var programPrice = prompt("Le prix du programme");
  if(programPrice != null) {
    document.getElementsByClassName('plusButton')[0].removeAttribute('onclick');
    var h3 = document.createElement('h3');
    h3Text = document.createTextNode(programPrice);
    h3.appendChild(h3Text);
    section.appendChild(h3);
    h3.parentNode.insertBefore(h3, h3.previousElementSibling);
    var h4 = document.createElement('h4');
    h4Text = document.createTextNode("Ce programme comprend :");
    h4.appendChild(h4Text);
    section.appendChild(h4);
    h4.parentNode.insertBefore(h4, h4.previousElementSibling);
    //button.setAttribute('onclick','BulletPrompt()');
  }
}