<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Adjust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/CreateAccount.css">

    <title>Créer un Compte</title>
</head>
<body>
<header>
    <!-- The navbar -->
    <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
</header>
<h1>Création d'un compte</h1>
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
<div id="createAccountForm">
    <form id="inputs_createAccount" method="post" action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>">
        <br>
        <label for="text">Prénom:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prenom">
        <br>
        <label for="text">Nom:</label><br>
        <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom"><br>
        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre courriel"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="pw1" name="pw1" placeholder="Créez un mot de passe"><br>
        <input type="password" id="pw2" name="pw2" placeholder="Confirmez le mot de passe"><br>
        <div id="pwDoesNotMatch">Les 2 champs ne correspondent pas!</div>

        <input class="button" type="submit" value="Enregistrer">
        <input class="button" type="reset" value="Annuler" onclick="goBack()">
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
    <!-- *** print server invalidations (errors) if exist -> wont be there later because users won't see that *** -->
    <p id="first_name_err" class="err""><?php echo $first_name_err; ?></p>
    <p id="last_name_err" class="err""><?php echo $last_name_err; ?></p>
    <p id="email_err" class="err""><?php echo $email_err; ?></p>
    <p id="pw1_err" class="err""><?php echo $pw1_err; ?></p>
    <p id="pw2_err" class="err""><?php echo $pw2_err; ?></p>
</div>
<!-- jQuery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../JS/form_validation_createAccount.js"></script>
<!-- JS -->
<script src="../JS/Main.js"></script>
</body>
</html>