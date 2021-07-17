<!-- Server side validation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../css/confirmBill.css">

    <title>Confirmation</title>
</head>
<body>
<header>
    <!-- The navbar -->
    <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
</header>

<?php
// Function for testing data
function test_input( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

// define variables and setting them all to empty values
$first_name = $last_name = $address = $email = $city = $country = $zip = $card_name = $card_num = $exp_month =
$exp_year = $cvv
    = "";

// define errors variables and setting them all to empty values
$first_name_err = $last_name_err = $address_err = $email_err = $city_err = $country_err = $zip_err = $card_name_err =
$card_num_err
    = $exp_month_err = $exp_year_err = $cvv_err = "";

// code for printing errors messages if fields are empty
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

    if ( empty( $_POST[ "card_name" ] ) ) {
        $card_name_err = "Le nom sur la carte est requis!";
    } else {
        $card_name = test_input( $_POST[ "card_name" ] );
    }

    if ( empty( $_POST[ "card_number" ] ) ) {
        $card_num_err = "Le numéro de la carte est requis!";
    } else {
        $card_num = test_input( $_POST[ "card_number" ] );
    }

    if ( empty( $_POST[ "exp_month" ] ) ) {
        $exp_month_err = "Le mois d'expiration de la carte est requis!";
    } else {
        $exp_month = test_input( $_POST[ "exp_month" ] );
    }

    if ( empty( $_POST[ "exp_year" ] ) ) {
        $exp_year_err = "L'année d'expiration de la carte est requise!";
    } else {
        $exp_year = test_input( $_POST[ "exp_year" ] );
    }

    if ( empty( $_POST[ "cvv" ] ) ) {
        $cvv = "Le code de sécurité de la carte est requis!";
    } else {
        $cvv = test_input( $_POST[ "cvv" ] );
    }

    if ( empty( $_POST[ "same_address" ] ) ) {
        $same_address = "L'adresse de livraison est la même que celle du paiment!";
    } else {
        $same_address = "L'adresse de livraison n'est pas la même que celle du paiment!";
    }
}
?>
<h1>Confirmation du paiement de : <?php echo $_POST[ "first_name" ] . " " . $_POST[ "last_name" ]; ?></h1>

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
        "même adresse pour la livraison que l'achat : " . $same_address . "<br>" .
        "date du paiment : " . $date . "<br>";
    ?>
</p>
<?php
// for storing the bills data (admin purpose)
// open a file and write the new content at the end of the actual content
$myfile = fopen( "../TXT/customers_bills.txt", "a" ) or die( "Unable to open file!" );
// the variable that contains the content to add
$txt = "Prénom : ". $first_name . "\n" . "Nom : " . $last_name . "\n" . "Courriel : " . $email . "\n" . "Adresse : " .
$address . "\n" . "Ville : " . $city . "\n" . "Pays : " . $country . "\n" . "Code postal : " . $zip . "\n" . "Nom sur la carte : " .
$card_name . "\n" . "Numéro de la carte : ". $card_num . "\n" . "Mois d'expiration : " . $exp_month . "\n" . "Année d'expiration : " .
$exp_year . "\n" . "CVV : " . $cvv . "\n" . "Même adresse que la livraison que l'achat : " . $same_address . "\n" . "Date de la transaction : " .
$date . "\n" . "========================================================================================================================" . "\n";
// add the content at the end of the file
fwrite( $myfile, $txt );
// close the file
fclose( $myfile );

// for storing the bills data (admin purpose)
// open a file and write the new content at the end of the actual content
$myfile = fopen( "../json/customers_bills.json", "a" ) or die( "Unable to open file!" );
// the variable that contains the content to add
$txt = json_encode($_POST, JSON_PRETTY_PRINT) . "\n";
// add the content at the end of the file
fwrite( $myfile, $txt );
// close the file
fclose( $myfile );
?>
<div class="thx">
Merci pour votre confiance et votre intérêt.
<br>
On vous souhaite un excellent séjour à notre camp!
</div>
<!-- JS -->
<script src="../JS/Main.js"></script>
</body>
</html>
