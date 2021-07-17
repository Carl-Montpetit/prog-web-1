<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->

    <title>Confirmation du compte</title>
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

// define variables and setting them all to empty values
$first_name = $last_name = $email = $pw1 = $pw2 = "";

// define errors variables and setting them all to empty values
$first_name_err = $last_name_err = $email_err = $pw1_err = $pw2_err = "";

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
        $pw2_err = "La confirmation du mot de passe est requise!";
    } else {
        $pw2 = test_input( $_POST[ "pw2" ] );
    }
}
?>
<h1>Confirmation de la création du compte de : <?php echo $_POST[ "first_name" ] . " " . $_POST[ "last_name" ]; ?></h1>

<h2>Voici vos informations :</h2>
<p>
    <?php
    date_default_timezone_set('America/Toronto');
    $date = date('m/d/Y h:i:s a', time());
    echo "<br><br>" .
        "courriel : " . $email . "<br>" .
        "mot de passe : " . $pw1 . "<br>" .
        "date de la création : " . $date . "<br>";
    ?>
</p>
<?php
// for storing the bills data (admin purpose)
// open a file and write the new content at the end of the actual content
$myfile = fopen( "../json/customers_accounts.json", "a" ) or die( "Unable to open file!" );
// the variable that contains the content to add
$txt = json_encode( $_POST, JSON_PRETTY_PRINT ) . "\n";
// add the content at the end of the file
fwrite( $myfile, $txt );
// close the file
fclose( $myfile );
?>
</body>
</html>