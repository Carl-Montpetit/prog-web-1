function connect(formConnect) {
    let form = document.getElementById( formConnect );
    form.onsubmit = function () {
        if(form.elements.value != "") {
            let value = form.first_name.value;
            var iframe = document.getElementById('navbar');
            var anonymousObjects = iframe.contentWindow.document.getElementsByClassName( "anonymous" );
            var i;
            for ( i = 0; i < anonymousObjects.length; i++ ) {
                anonymousObjects[ i ].style.display = "none";
            }
            var loggedInObjects = iframe.contentWindow.document.getElementsByClassName( "loggedIn" );
            for ( i = 0; i < loggedInObjects.length; i++ ) {
                loggedInObjects[ i ].style.display = "inline-block";
            }
            value = value + ' <i class="fa fa-child" ></i>';
            iframe.contentWindow.document.getElementById( "monCompteButton" ).innerHTML = value;
            return false;
        }
    };
    form.onreset = function () {
        location.replace('../PHP/Main.php');
    }
    
}