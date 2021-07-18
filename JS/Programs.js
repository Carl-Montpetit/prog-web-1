newProgramOpen = false;
finalCount = 0;

function calcPrice() {
    //          ***calculates the price in the cart
    total = parseInt( document.getElementById( "totalPrice" ).innerHTML );
    form = document.getElementById( "hiddenForm" );

    form.onsubmit = function () {
        finalPrice = parseInt( document.getElementById( "totalPrice" ).innerHTML );
        document.getElementById( 'hiddenInput' ).value = finalPrice;
        document.getElementById( 'hiddenCount' ).value = finalCount;
    }
}

function allowDrop( ev ) {
    ev.preventDefault();
}

function drag( ev ) {
    ev.dataTransfer.setData( "text", ev.target.id );
}

function drop( ev ) {
    //          ***removes infro from section when dropped in cart
    ev.preventDefault();
    let data = ev.dataTransfer.getData( "text" );
    ev.target.appendChild( document.getElementById( data ) );
    let item = document.getElementById( data );
    item.childNodes[ 3 ].style.display = 'none';
    item.childNodes[ 5 ].style.display = 'none';
    item.childNodes[ 7 ].style.display = 'none';
    if ( item.childNodes.length > 11 ) {
        item.childNodes[ 9 ].style.display = 'none';
        item.childNodes[ 11 ].style.display = 'none';
    }
    item.style.height = "20px";
    cartText = document.getElementById( "cartText" );
    cartText.style.display = 'none';
    dropArea = document.getElementById( "dropArea" );
    dropArea.style.display = "revert";
    storeCartInfo( item );
    item.parentNode.insertBefore( item, item.previousElementSibling );
}

function dropZone( ev ) {
    //          ***puts info back on section when dropped in a blank area
    ev.preventDefault();
    let data = ev.dataTransfer.getData( "text" );
    ev.target.appendChild( document.getElementById( data ) );
    let item = document.getElementById( data );
    item.childNodes[ 3 ].style.display = 'block';
    item.childNodes[ 5 ].style.display = 'block';
    item.childNodes[ 7 ].style.display = 'block';
    if ( item.childNodes.length > 11 ) {
        item.childNodes[ 9 ].style.display = 'block';
        item.childNodes[ 11 ].style.display = 'block';
    }
    item.style.height = "600px";
    removeCartInfo( item );
    //          ***creates a new blank area
    newDropArea = document.createElement( 'td' );
    newDropArea.setAttribute( 'id', 'dropArea' );
    newDropArea.setAttribute( 'class', 'dropZone' );
    newDropArea.setAttribute( 'ondrop', 'dropZone(event)' );
    newDropArea.setAttribute( 'ondragover', 'allowDrop(event)' );
    document.getElementById( "newDropZone" ).appendChild( newDropArea );
    dropArea2 = document.getElementsByClassName( "dropZone" );
    dropArea2[ 1 ].style.display = "revert";
    dropArea2[ 2 ].style.display = "revert";
}

function addProgram() {
    if ( !newProgramOpen ) {
        newProgramOpen = true;
        td = document.createElement( 'td' );
        document.getElementById( "addNewPrograms" ).appendChild( td );

        //          ***adds a section
        section = document.createElement( 'section' );
        section.setAttribute( 'draggable', 'true' );
        section.setAttribute( 'ondragstart', 'drag(event)' );
        td.appendChild( section );

        //          ***adds a + button in the section
        plusButton = document.createElement( 'button' );
        plusButton.setAttribute( 'id', 'plusButton' );
        plusButton.setAttribute( 'class', 'programButtons' );
        plusButton.setAttribute( 'onclick', 'namePrompt()' );
        section.appendChild( plusButton );
        var plus = document.createElement( 'i' );
        plus.setAttribute( 'class', 'fa fa-plus' );
        plusButton.appendChild( plus );
        var pencil = document.createElement( 'i' );
        pencil.setAttribute( 'id', 'pencil' );
        pencil.setAttribute( 'class', 'fa fa-pencil' );
        plusButton.appendChild( pencil );

        //          ***adds an x button in the section
        xButton = document.createElement( 'button' );
        xButton.setAttribute( 'id', 'xButton' );
        xButton.setAttribute( 'class', 'programButtons' );
        xButton.setAttribute( 'onclick', 'cancelNewProgram()' );
        section.appendChild( xButton );
        var x = document.createElement( 'i' );
        x.setAttribute( 'class', 'fa fa-times' );
        xButton.appendChild( x );

        //          ***adds a checkmark button in the section
        checkmarkButton = document.createElement( 'button' );
        checkmarkButton.setAttribute( 'id', 'checkmarkButton' );
        checkmarkButton.setAttribute( 'class', 'programButtons' );
        checkmarkButton.setAttribute( 'onclick', 'confirmNewProgram()' );
        section.appendChild( checkmarkButton );
        var checkmark = document.createElement( 'i' );
        checkmark.setAttribute( 'class', 'fa fa-check' );
        checkmarkButton.appendChild( checkmark );
    }
}

function namePrompt() {
    var programName = prompt( "Nom du programme" );
    if ( programName != null ) {
        document.getElementById( 'plusButton' ).removeAttribute( 'onclick' );
        document.getElementById( 'pencil' ).remove();
        var dollar = document.createElement( 'i' );
        dollar.setAttribute( 'id', 'dollar' );
        dollar.setAttribute( 'class', 'fa fa-dollar' );
        plusButton.appendChild( dollar );

        //          ***adds an h2 containing the text of the prompt
        var h2 = document.createElement( 'h2' );
        h2Text = document.createTextNode( programName );
        h2.appendChild( h2Text );
        section.appendChild( h2 );
        h2.parentNode.insertBefore( h2, h2.previousElementSibling );
        h2.parentNode.insertBefore( h2, h2.previousElementSibling );
        h2.parentNode.insertBefore( h2, h2.previousElementSibling );
        plusButton.setAttribute( 'onclick', 'pricePrompt()' );
    }
}

function pricePrompt() {
    var programPrice = prompt( "Le prix du programme" );
    if ( programPrice != null ) {
        document.getElementById( 'plusButton' ).removeAttribute( 'onclick' );
        document.getElementById( 'dollar' ).remove();
        var bullet = document.createElement( 'i' );
        bullet.setAttribute( 'id', 'bullet' );
        bullet.setAttribute( 'class', 'fa fa-list' );
        plusButton.appendChild( bullet );

        //          ***adds an h3 containing the price inserted in the prompt
        var h3 = document.createElement( 'h3' );
        h3Text = document.createTextNode( programPrice );
        h3.appendChild( h3Text );
        section.appendChild( h3 );
        h3.parentNode.insertBefore( h3, h3.previousElementSibling );
        h3.parentNode.insertBefore( h3, h3.previousElementSibling );
        h3.parentNode.insertBefore( h3, h3.previousElementSibling );

        //          ***adds an h4
        var h4 = document.createElement( 'h4' );
        h4Text = document.createTextNode( "Ce programme comprend :" );
        h4.appendChild( h4Text );
        section.appendChild( h4 );
        h4.parentNode.insertBefore( h4, h4.previousElementSibling );
        h4.parentNode.insertBefore( h4, h4.previousElementSibling );
        h4.parentNode.insertBefore( h4, h4.previousElementSibling );
        plusButton.setAttribute( 'onclick', 'bulletPrompt()' );
    }
}

function bulletPrompt() {
    programBullet = prompt( "L'info du programme" );
    if ( programBullet != null ) {

        //          ***adds a ul and a li
        ul = document.createElement( 'ul' );
        section.appendChild( ul );
        let li = document.createElement( 'li' );
        liText = document.createTextNode( programBullet );
        li.appendChild( liText );
        ul.appendChild( li );
        ul.parentNode.insertBefore( ul, ul.previousElementSibling );
        ul.parentNode.insertBefore( ul, ul.previousElementSibling );
        ul.parentNode.insertBefore( ul, ul.previousElementSibling );

        //          ***adds a smaller bullet button
        if ( document.getElementById( 'plusBulletButton' ) ) {
            document.getElementById( 'plusBulletButton' ).remove();
        }
        plusBulletButton = document.createElement( 'button' );
        plusBulletButton.setAttribute( 'id', 'plusBulletButton' );
        plusBulletButton.setAttribute( 'class', 'programButtons' );
        plusBulletButton.setAttribute( 'onclick', 'namePrompt()' );
        ul.appendChild( plusBulletButton );
        let plusBullet = document.createElement( 'i' );
        plusBullet.setAttribute( 'class', 'fa fa-plus' );
        plusBulletButton.appendChild( plusBullet );
        let bulletSmall = document.createElement( 'i' );
        bulletSmall.setAttribute( 'class', 'fa fa-list-ul' );
        plusBulletButton.appendChild( bulletSmall );
        plusBulletButton.setAttribute( 'onclick', 'smallBulletPrompt()' );
    }
}

function smallBulletPrompt() {
    let programSmallBullet = prompt( "L'info du programme" );
    if ( programSmallBullet != null ) {

        //          ***adds a ul and an li
        let ul2 = document.createElement( 'ul' );
        ul.appendChild( ul2 );
        let li = document.createElement( 'li' );
        liText = document.createTextNode( programSmallBullet );
        li.appendChild( liText );
        ul2.appendChild( li );
        ul2.parentNode.insertBefore( ul2, ul2.previousElementSibling );
    }
}

function confirmNewProgram() {
    //          ***removed the buttons from the section
    if ( programBullet != null ) {
        var i;
        programButtons = document.getElementsByClassName( 'programButtons' );
        for ( i = 0; i < programButtons.length; i++ ) {
            programButtons[ i ].remove();
            programButtons[ i ].remove();
            programButtons[ i ].remove();
            programButtons[ i ].remove();
        }
        newProgramOpen = false;
    }
}

function cancelNewProgram() {
    //          ***deletes the section
    td.remove();
    newProgramOpen = false;
}

function storeCartInfo( item ) {
    //          ***stores info to be sent to Bills.php
    finalCount++;
    addPrice = parseInt( item.childNodes[ 3 ].innerHTML );
    total = total + addPrice;
    document.getElementById( "totalPrice" ).innerHTML = total;
    let temporaryName = item.childNodes[ 1 ].innerHTML;
    let temporaryPrice = item.childNodes[ 3 ].innerHTML;

    switch ( temporaryName ) {
        case "Le Classique":
            document.getElementById( 'classique' ).value = temporaryName;
            document.getElementById( 'classiquePrice' ).value = temporaryPrice;
            break;
        case "Arts et Science":
            document.getElementById( 'artsScience' ).value = temporaryName;
            document.getElementById( 'artsSciencePrice' ).value = temporaryPrice;
            break;
        case "L'Enfant Actif":
            document.getElementById( 'enfantActif' ).value = temporaryName;
            document.getElementById( 'enfantActifPrice' ).value = temporaryPrice;
            break;
    }
}

function removeCartInfo( item ) {
    //          ***removes info that is sent to Bills.php
    finalCount--;
    subtractPrice = parseInt( item.childNodes[ 3 ].innerHTML );
    total = total - subtractPrice;
    document.getElementById( "totalPrice" ).innerHTML = total;
    let temporaryName = item.childNodes[ 1 ].innerHTML;
    let temporaryPrice = item.childNodes[ 3 ].innerHTML;

    switch ( temporaryName ) {
        case "Le Classique":
            document.getElementById( 'classique' ).value = "";
            document.getElementById( 'classiquePrice' ).value = "";
            break;
        case "Arts et Science":
            document.getElementById( 'artsScience' ).value = "";
            document.getElementById( 'artsSciencePrice' ).value = "";
            break;
        case "L'Enfant Actif":
            document.getElementById( 'enfantActif' ).value = "";
            document.getElementById( 'enfantActifPrice' ).value = "";
            break;
    }
}