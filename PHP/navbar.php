<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/navbar.css">
    <!-- JS -->
    <script src="../JS/Main.js"></script>

    <title>Navigation bar</title>

</head>

<nav>
    <div class="dropdown">
        <a href="Main.php" target="_top">
            <button class="dropbtn">Accueil
                <i class="fa fa-home"></i>
            </button>
        </a>
    </div>
    <div class="dropdown">
        <a href="Programs.php" target="_top">
            <button class="dropbtn">Nos Programmes
                <i class="fa fa-compass"></i>
            </button>
        </a>
    </div>
    <div class="dropdown">
        <a href="Calendar.php" target="_top">
            <button class="dropbtn">Calendrier
                <i class="fa fa-calendar"></i>
            </button>
        </a>
    </div>
    <div id="monCompte" class="dropdown">
        <button id="monCompteButton" class="dropbtn">Mon compte
            <i class="fa fa-child"></i>
        </button>
        <div class="dropdown-content">
            <a class="anonymous" href="../PHP/Login.php" target="_top">Se connecter</a>
            <a class="anonymous" href="../PHP/CreateAccount.php" target="_top">Creer un compte</a>
            <a class="loggedIn" href="../PHP/AddMember.php" target="_top">Ajouter un Membre</a>
            <a class="loggedIn">Mes Inscriptions</a>
            <a class="loggedIn" onclick="disconnect()">Déconnexion</a>
        </div>
    </div>

</nav>


<!-- jQuery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../JS/form_validation_bill.js"></script>
</body>
</html>
