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

// function invalidPw() {
//     var alert = document.getElementById( "pwDoesNotMatch" );
//     alert.style.display = "inline";
// }