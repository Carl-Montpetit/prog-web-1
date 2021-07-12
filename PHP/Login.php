<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Document</title>
</head>
<body>
    <div id="connectAccountForm">
        <form id="connectForm">
            <br>
            <label for="email">Courriel:</label><br>
            <input type="email" id="email" name="email" placeholder="Entrez votre courriel" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="pw" name="pw" placeholder="Créez un mot de passe" required><br>
            <div id="pwDoesNotMatch">Les 2 champs ne correspondent pas!</div>
            <br>
            <input class="button" type="submit" value="Se Connecter">
            <input class="button" type="reset" value="Annuler" onclick="goBack()">
        </form>
    </div>

    <script src="../JS/Main.js"></script>
</body>
</html>