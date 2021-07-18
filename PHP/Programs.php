<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Adjust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/Programs.css">
    <title>Programmes</title>
</head>

<body onload="calcPrice()">
<iframe id="navBar" onmouseover="unRelative()" src="./navbar.php" frameborder="0"></iframe>
<button id="createProgram" onclick="addProgram()">+ Creer un nouveau program</button>
<!--TODO: make this button available for admin ONLY  -->

<header>
    <h1>Liste des programmes offert</h1>
</header>
<table>
    <td>
        <section id="classic" draggable="true" ondragstart="drag(event)">
            <h2>Le Classique</h2>
            <h3>100 <span>$</span></h3>
            <h4>Ce programme comprend :</h4>
            <ul>
                <li>Un bloc d'activités sportif</li>
                <li>Un autre bloc d’activités possédant :</li>
                <ul>
                    <li>Une activité de type <i>art</i></li>
                    <li>Une activité de type <i>science</i></li>
                </ul>
            </ul>
        </section>
    </td>
    <td>
        <section id="artscience" draggable="true" ondragstart="drag(event)">
            <h2>Arts et Science</h2>
            <h3>150 <span>$</span></h3>
            <h4>Ce programme comprend :</h4>
            <ul>
                <li>Plusieurs activités du type :</li>
                <ul>
                    <li>Culinaires</li>
                    <li>Arts visuels</li>
                    <li>Arts plastiques</li>
                    <li>Chimie</li>
                    <li>Biologie</li>
                    <li>Physique</li>
                </ul>
            </ul>
            <ul>
                <li>Une activité matinale est réservé pour pratiquer :</li>
                <ul>
                    <li>Le yoga</li>
                    <li>Jeu de course comme le ballon chasseur</li>
                </ul>
            </ul>
            <h4>
                Ce programme <u>ne comprend pas</u><br><br><br> d'activités du type <em>sportif</em> !
            </h4>
        </section>
    </td>
    <td>
        <section id="sport" draggable="true" ondragstart="drag(event)">
            <h2>L'Enfant Actif</h2>
            <h3>100 <span>$</span></h3>
            <h4>Ce programme comprend :</h4>
            <ul>
                <li>Au moins 4 activités quotidiennes parmi :</li>
                <ul>
                    <li>Le basketball</li>
                    <li>Le tennis</li>
                    <li>Le soccer</li>
                    <li>Le ballon chasseur</li>
                    <li>Le baseball</li>
                    <li>Et plus encore!</li>
                </ul>
            </ul>
        </section>
    </td>
    <td id="addNewPrograms"></td>
    <td id="dropArea" class="dropZone" ondrop="dropZone(event)" ondragover="allowDrop(event)"></td>
    <td id="newDropZone"></td>
    <section id="cart" ondrop="drop(event)" ondragover="allowDrop(event)">
        <i class="fa fa-cart-arrow-down"></i>
        <span id="cartText"><br>Glissez vos programs<br>
                dans le panier</span>
        <div id="totalBox">Total: $<span id="totalPrice">0</span></div>
    </section>
</table>
<form id="hiddenForm" action="../PHP/Bills.php" method="POST">
    <input id="hiddenInput" type='hidden' name='total'>
    <input id="classique" type='hidden' name='classique'>
    <input id="classiquePrice" type='hidden' name='classiquePrice'>
    <input id="artsScience" type='hidden' name='artsScience'>
    <input id="artsSciencePrice" type='hidden' name='artsSciencePrice'>
    <input id="enfantActif" type='hidden' name='enfantActif'>
    <input id="enfantActifPrice" type='hidden' name='enfantActifPrice'>
    <input id="hiddenCount" type='hidden' name='count'>
    <input id="checkout" type="submit" value=''><i class="fa fa-usd"></i></input>
</form>

<script src="../JS/Programs.js"></script>
</body>

</html>