<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/CreateAccount.css">
    <title>Creer un Compte</title>
</head>
<body>
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
    </div>

    <script src="../JS/Main.js"></script>
</body>
</html>