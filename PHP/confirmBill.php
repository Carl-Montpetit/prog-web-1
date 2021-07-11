<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
<p>
    <strong>Confirmation du paiement de : </strong>
    <?php echo $_POST[ "firstname" ] . " " . $_POST[ "lastname" ]; ?>
</p>
<p>
    <strong>Voici vos informations :</strong>
    <?php
    echo "<br><br>" .
        "courriel : " . $_POST[ "email" ] . "<br>" .
        "adresse : " . $_POST[ "address" ] . "<br>" .
        "ville : " . $_POST[ "city" ] . "<br>" .
        "pays : " . $_POST[ "country" ] . "<br>" .
        "code postal : " . $_POST[ "zip" ] . "<br>" .
        "nom sur la carte : " . $_POST[ "cardname" ] . "<br>" .
        "numéro de la carte : " . $_POST[ "ccnum" ] . "<br>" .
        "mois d'expiration : " . $_POST[ "expmonth" ] . "<br>" .
        "année d'expiration : " . $_POST[ "expyear" ] . "<br>" .
        "CVV : " . $_POST[ "cvv" ] . "<br>" .
        "même adresse pour la livraison que l'achat : " . $_POST[ "same_adress"] . "<br>" .
        "date du paiment : " . date_default_timezone_get();
    ?>
</p>
<br>
<p>Merci pour votre confiance et on vous souhaite un bon séjour au camp!</p>
</body>
</html>
