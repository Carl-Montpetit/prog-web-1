<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Adjust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/RegisterPrograms.css">

    <title>Les enregistrements</title>
</head>
<body>
<iframe id="navBar" onmouseover="unRelative()" src="./navbar.php" frameborder="0"></iframe>
<header>
    <h1>Inscription des programmes</h1>
    <h2>Liste des programmes dans lesquels vous êtes inscrits :</h2>
</header>

<table>
    <tr>
        <th>Nom et prénom</th>
        <th>Programme choisi</th>
        <th>Saison</th>
    </tr>
    <tr>
        <td><?php echo $_POST[ "first_name" ] . " " . $_POST[ "last_name" ] ?></td>
        <td> Ex : Le classique<br>L'art et la science</br>L'enfant actif</td>
        <td>Ex : Été 2021</td>
    </tr>
    <tr>
        <td>Test 2</td>
        <td>Ex : Le classique</td>
        <td>Ex : Été 2021</td>
    </tr>
    <tr>
        <td>Test 3</td>
        <td>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>