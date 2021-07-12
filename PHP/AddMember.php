<!--
Je me suis inspiré des sites :
https://www.w3schools.com/howto/howto_css_contact_form.asp
https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_date
--->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/AddMember.css">

    <title>Ajouter des membres</title>
</head>

<body>

<h1>Ajouter un membre</h1>

<div id="members">
    <form action="/action_page.php">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..."><br>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom..."><br>

        <label for="date">Date de naissance</label><br>
        <form action="/action_page.php">
            <input type="date" id="date" name="date"><br>
        </form>
        <input type="submit" value="Envoyer">
    </form>
</div>
</body>
</html>