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

<!-- Account creation form -->
<div id="createAccountForm">
    <form id="inputs_createAccount" method="post" action="../PHP/Navbar.php">
        <br>
        <label for="text">Prénom:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prénom">
        <br>
        <label for="text">Nom:</label><br>
        <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom"><br>
        <label for="email">Courriel:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre courriel"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="pw1" name="pw1" placeholder="Créer un mot de passe"><br>
        <input type="password" id="pw2" name="pw2" placeholder="Confirmez le mot de passe"><br>
        <input id="cancel" class="button" type="reset" value="Annuler">
        <input class="button" type="submit" name="submit" value="Enregistrer">
    </form>
</div>
<!-- jQuery -->
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="../JS/form_validation_createAccount.js"></script>
<!-- JS -->
<script src="../JS/CreateAccount.js"></script>
</body>
</html>