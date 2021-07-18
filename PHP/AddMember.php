<!--
Je me suis inspiré des sites :
https://www.w3schools.com/howto/howto_css_contact_form.asp
https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_date
--->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Adjust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/AddMember.css">

    <title>Ajouter des membres</title>
</head>

<body>

<!-- The navbar -->
<iframe src="./navbar.php" frameborder="0"></iframe>

<h1>Ajouter un membre</h1>
<div>
    <i class="fa fa-child"></i>
</div>
<button onclick="addMember()">
    <em class="fa fa-plus"></em>
</button>
<section id="members">
    <i id="iForm" class="fa fa-child"></i>
    <form action="../php/RegisterPrograms.php" method="post">
        <label for="prenom">Prénom</label>
        <input type="text" id="first_name" name="first_name" placeholder="Leur prénom..."><br>
        <label for="nom">Nom</label>
        <input type="text" id="last_name" name="last_name" placeholder="Leur nom..."><br>
        <label id="sex">Sexe</label>
        <group class='inline-radio' name="sexe">
            <input id="male" type="radio" name="male"><label for="male">masculin</label>
            <input id="female" type="radio" name="female"><label for="female">féminin</label>
            <input id="other" type="radio" name="other"><label for="other">autre</label>
        </group>
        <br>
        <label for="date">Date de naissance</label><br>
        <input type="date" id="date" name="date"><br>
        <input type="submit" value="Envoyer">
    </form>
</section>

<script src="../JS/AddMember.js"></script>
</body>
</html>