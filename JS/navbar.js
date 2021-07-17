function connect() {
    // aller chercher le nom du client dans le json-> nommé "value"
    $.getJSON( "../json/customers_accounts.js", function ( data ) {});

    let value = "carl";
    var anonymousObjects = document.getElementsByClassName( "anonymous" );
    var i;
    for ( i = 0; i < anonymousObjects.length; i++ ) {
        anonymousObjects[ i ].style.display = "none";
    }
    var loggedInObjects = document.getElementsByClassName( "loggedIn" );
    for ( i = 0; i < loggedInObjects.length; i++ ) {
        loggedInObjects[ i ].style.display = "inline-block";
    }
    value = value + ' <i class="fa fa-child" ></i>';
    document.getElementById( "monCompteButton" ).innerHTML = value;
}

function disconnect() {
    document.getElementById( "monCompteButton" ).innerHTML = "Mon Compte" + ' <i class="fa fa-child" ></i>';
    var anonymousObjects = document.getElementsByClassName( "anonymous" );
    var i;
    for ( i = 0; i < anonymousObjects.length; i++ ) {
        anonymousObjects[ i ].style.display = "inline-block";
    }
    var loggedInObjects = document.getElementsByClassName( "loggedIn" );
    for ( i = 0; i < loggedInObjects.length; i++ ) {
        loggedInObjects[ i ].style.display = "none";
    }
}

