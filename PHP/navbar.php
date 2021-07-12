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

</head>
<?php
// define variables and set to empty values
$first_name_err = $last_name_err = $email_err = $pw1_err = $pw2_err = "";
$first_name = $last_name = $email = $pw1 = $pw2 = "";

function test_input( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

?>
<body><?php echo
$first_name_err
?>
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
            <a class="anonymous" onclick="connect('connectAccountForm', 'connectForm')">Se connecter</a>
            <a class="anonymous" onclick="connect('createAccountForm', 'createForm')">Creer un compte</a>
            <a class="loggedIn" href="AddMember.html" target="_top">Ajouter un Membre</a>
            <a class="loggedIn">Mes Inscriptions</a>
            <a class="loggedIn" onclick="disconnect()">Déconnexion</a>
        </div>
    </div>

</nav>
<div id="createAccountForm">
    <form id="inputs_createAccount" method="post" action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>">
        <br>
        <label for="text">Prenom:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prenom">
        <br>
        <label for="text">Nom:</label><br>
        <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom"><br>
        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre courriel"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="pw" name="pw" placeholder="Créez un mot de passe"><br>
        <input type="password" id="pw2" name="pw2" placeholder="Confirmez le mot de passe"><br>
        <div id="pwDoesNotMatch">Les 2 champs ne correspondent pas!</div>
        <br>
        <input type="submit" value="Enregistrer">
    </form>
    <?php
    if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
        if ( empty( $_POST[ "first_name" ] ) ) {
            $first_name_err = "Le prénom est requis!";
        } else {
            $first_name = test_input( $_POST[ "first_name" ] );
        }

        if ( empty( $_POST[ "last_name" ] ) ) {
            $last_name_err = "Le nom est requis!";
        } else {
            $last_name = test_input( $_POST[ "last_name" ] );
        }

        if ( empty( $_POST[ "email" ] ) ) {
            $email_err = "Le courriel est requis!";
        } else {
            $email = test_input( $_POST[ "email" ] );
        }

        if ( empty( $_POST[ "pw1" ] ) ) {
            $pw1_err = "Le mot de passe est requis!";
        } else {
            $pw1 = test_input( $_POST[ "pw1" ] );
        }

        if ( empty( $_POST[ "pw2" ] ) ) {
            $pw2_err = "La vérification du mot de passe est requise!";
        } else {
            $pw2 = test_input( $_POST[ "pw2" ] );
        }
    }
    ?>
</div>

<div id="connectAccountForm">
    <form id="connectForm">
        <br>
        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre courriel" required><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="pw" name="pw" placeholder="Créez un mot de passe" required><br>
        <div id="pwDoesNotMatch">Les 2 champs ne correspondent pas!</div>
        <br>
        <input type="submit" value="Se Connecter">
    </form>
</div>
<!-- jQuery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../JS/form_validation_bill.js"></script>
</body>
</html>
