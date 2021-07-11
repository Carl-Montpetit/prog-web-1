<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmBill.css">
    <title>Confirmation</title>
</head>
<body>
<?php
// Function for testing data
function test_input( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

// define variables and set to empty values
$first_name = $last_name = $address = $email = $city = $country = $zip = $card_name = $card_num = $exp_month =
$exp_year = $cvv
    = "";

// define errors variables and set to empty values
$first_name_err = $last_name_err = $address_err = $email_err = $city_err = $country_err = $zip_err = $card_name_err =
$card_num_err
    = $exp_month_err = $exp_year_err = $cvv_err = "";

if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
    if ( empty( $_POST[ "firstname" ] ) ) {
        $first_name_err = "Le prénom est requis!";
    } else {
        $first_name = test_input( $_POST[ "firstname" ] );
    }

    if ( empty( $_POST[ "lastname" ] ) ) {
        $last_name_err = "Le nom est requis!";
    } else {
        $last_name = test_input( $_POST[ "lastname" ] );
    }

    if ( empty( $_POST[ "address" ] ) ) {
        $address_err = "L'addresse est requise!";
    } else {
        $address = test_input( $_POST[ "address" ] );
    }

    if ( empty( $_POST[ "email" ] ) ) {
        $email_err = "Le courriel est requis!";
    } else {
        $email = test_input( $_POST[ "email" ] );
    }

    if ( empty( $_POST[ "city" ] ) ) {
        $city_err = "La ville est requise!";
    } else {
        $city = test_input( $_POST[ "city" ] );
    }

    if ( empty( $_POST[ "country" ] ) ) {
        $country_err = "Le pay est requis!";
    } else {
        $country = test_input( $_POST[ "country" ] );
    }

    if ( empty( $_POST[ "zip" ] ) ) {
        $zip_err = "Le code postal est requis!";
    } else {
        $zip = test_input( $_POST[ "zip" ] );
    }

    if ( empty( $_POST[ "cardname" ] ) ) {
        $card_name_err = "Le nom sur la carte est requis!";
    } else {
        $card_name = test_input( $_POST[ "cardname" ] );
    }

    if ( empty( $_POST[ "ccnum" ] ) ) {
        $card_num_err = "Le numéro de la carte est requis!";
    } else {
        $card_num = test_input( $_POST[ "ccnum" ] );
    }

    if ( empty( $_POST[ "expmonth" ] ) ) {
        $exp_month_err = "Le mois d'expiration de la carte est requis!";
    } else {
        $exp_month = test_input( $_POST[ "expmonth" ] );
    }

    if ( empty( $_POST[ "expyear" ] ) ) {
        $exp_year_err = "L'année d'expiration de la carte est requise!";
    } else {
        $exp_year = test_input( $_POST[ "expyear" ] );
    }

    if ( empty( $_POST[ "cvv" ] ) ) {
        $cvv = "Le code de sécurité de la carte est requis!";
    } else {
        $cvv = test_input( $_POST[ "cvv" ] );
    }

    if ( empty( $_POST[ "expmonth" ] ) ) {
        $same_adress = "L'adresse de livraison est la même que celle du paiment!";
    } else {
        $same_adress = "L'adresse de livraison n'est pas la même que celle du paiment!";
    }
}


?>
<h1>Confirmation du paiement de : <?php echo $_POST[ "firstname" ] . " " . $_POST[ "lastname" ]; ?></h1>

<h2>Voici vos informations :</h2>
<p>
    <?php
    date_default_timezone_set('America/Toronto');
    $date = date('m/d/Y h:i:s a', time());
    echo "<br><br>" .
        "courriel : " . $email . "<br>" .
        "adresse : " . $address . "<br>" .
        "ville : " . $city . "<br>" .
        "pays : " . $country . "<br>" .
        "code postal : " . $zip . "<br>" .
        "nom sur la carte : " . $card_name . "<br>" .
        "numéro de la carte : " . $card_num . "<br>" .
        "mois d'expiration : " . $exp_month . "<br>" .
        "année d'expiration : " . $exp_year . "<br>" .
        "CVV : " . $cvv . "<br>" .
        "même adresse pour la livraison que l'achat : " . $same_adress . "<br>" .
        "date du paiment : " . $date;
    ?>
</p>
<div class="thx">
Merci pour votre confiance et votre intérêt.
<br>
On vous souhaite un excellent séjour à notre camp!
</div>
</body>
</html>
