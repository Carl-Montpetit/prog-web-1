<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/Programs.css">

    <title>Programmes</title>
</head>

<body>
<iframe src="./navbar.php" frameborder="0"></iframe>
<header>
    <h1>Liste des programmes offert</h1>
</header>
<table>
    <td>
        <section draggable="true" ondragstart="drag(event)" id="classic">
            <h2><strong>LE CLASSIQUE</strong></h2>
            <h3><strong>100$</strong></h3>
            <h4>Ce programme comprend :</h4>
            <ul>
                <li>Un bloc d'activités sportif</li>
                <li>
                    Un autre bloc d’activités possédant :
                </li>
                <ul>
                    <li>Une activité de type <i>art</i></li>
                    <li>Une activité de type <i>science</i></li>
                </ul>
            </ul>
        </section>
    </td>
    <td>
        <section draggable="true" ondragstart="drag(event)" id="artscience">
            <h2><strong>LES ARTS ET LA SCIENCE</strong></h2>
            <h3><strong>150$</strong></h3>
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
                Ce programme <u>ne comprend pas</u><br><br><br> d'activités du type <i>sportif</i> !
            </h4>
        </section>
    </td>
    <td>
        <section draggable="true" ondragstart="drag(event)" id="sport">
            <h2><strong>L'ENFANT ACTIF</strong></h2>
            <h3><strong>100$</strong></h3>
            <h4>Ce programme comprend :</h4>
            <ul>
                <li>Au moins 4 activités quotidiennes parmi :
                </li>
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
    <td>
        <section ondrop="drop(event)" ondragover="allowDrop(event)" id="cart"><i class="fa fa-cart-arrow-down"></i>
        </section>
    </td>
</table>

<script src="../JS/Main.js"></script>
</body>

</html>