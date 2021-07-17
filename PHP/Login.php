<?php
// beginning of the session
session_start();

// verify if the user clicked the submit button
if(isset($_POST['submit'])){
    // Définie le courriel et mot de passe dans une liste
    $logins = array('admin@admin.com' => 'admin');
    // Décalaration des variables
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $Password = isset($_POST['pw1']) ? $_POST['pw1'] : '';
    // Vérifie si le courriel et mot de passe existe dans la liste
    if (isset($logins[$email]) && $logins[$email] == $Password){
        $_SESSION['UserData']['email']=$logins[$email];
        // return to the main page
        header("location:Main.php");
        exit;
    }
    // error message if the password and email are not corresponding
    else{
        echo "<script>alert('Erreur! Le courriel ou le mot de passe invalide!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- Adjust the display in function of the device -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- To link the file to the style sheet -->
        <link rel="stylesheet" href="../CSS/Login.css">

    </head>
    <body onload="connect()">
        <header>
            <!-- The navbar -->
            <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
        </header>
        <h1>Se Connecter</h1>

        <div id="connectAccountForm">
            <form id="connectForm" method = "post" form action ="">
                <br>
                <label for="email">Courriel:</label><br>
                <input type="email" id="email" name="email" placeholder="Entrez votre courriel" required><br>
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="pw1" name="pw1" placeholder="Créer un mot de passe" required><br>
                <input id="cancel" class="button" type="reset" value="Annuler">
                <input class="button" type="submit" name ="submit" value="Se Connecter">
            </form>
        </div>
    <!-- JS -->
    <script src="../JS/Login.js"></script>
    </body>
</html>