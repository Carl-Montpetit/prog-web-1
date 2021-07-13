<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/Programs.css">
    <title>Programmes</title>
</head>

<body>
    <iframe id="navBar" onmouseover="unRelative()" src="./navbar.php" frameborder="0"></iframe>
    <button id="createProgram" onclick="addProgram()">+ Creer un nouveau program</button>  <!--TODO: make this button available for admin ONLY  -->
    
    <header>
        <h1>Liste des programmes offert</h1>
    </header>
    <table>
        <td>
            <section class="relativeObjects" draggable="true" ondragstart="drag(event)" id="classic">
                <h2>Le Classique</strong></h2>
                <h3>100$</strong></h3>
                <h4>Ce programme comprend :</h4>
                <ul>
                    <li>Un bloc d'activités sportif</li>
                    <li>
                        Un autre bloc d’activités possédant :
                    </li>
                    <ul>
                        <li>Une activité de type <i>art</i> </li>
                        <li>Une activité de type <i>science</i></li>
                    </ul>
                </ul>
            </section>
        </td>
        <td>
            <section class="relativeObjects" draggable="true" ondragstart="drag(event)" id="artscience">
                <h2>Les Arts et La Science</strong></h2>
                <h3>150$</strong></h3>
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
            <section class="relativeObjects" draggable="true" ondragstart="drag(event)" id="sport">
                <h2>L'enfant Actif</strong></h2>
                <h3>100$</strong></h3>
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
        <td id="addNewPrograms"></td>
            <section class="relativeObjects" ondrop="drop(event)" ondragover="allowDrop(event)" id="cart">
                <i class="fa fa-cart-arrow-down"></i>
                <span id="cartText"><br>Glissez vos programs<br>
             dans le panier</span>
            </section>
    </table>

    <script src="../JS/Main.js"></script>
</body>

</html>