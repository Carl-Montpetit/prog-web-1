<!-- Documentation: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <title>Paiement</title>
    <!-- Ajust the display in function of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/Bills.css">
</head>
<body>
<header>
    <!-- The navbar -->
    <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
</header>
<h1>Paiement de votre facture</h1>
<table id="page">
    <td class="page">
        <div class="col-25">
            <div id="cart_container" class="container">
                <h3 id="panier_title">Votre panier</h3>
                <label id="cart_title"><em id="cart"
                                           class="fa fa-shopping-cart"><?php echo " " . $_POST[ 'count' ]; ?></em>
                </label>
                <p><a href="Programs.php"><?php echo $_POST[ 'classique' ]; ?></a>
                    <span class="price"><?php echo $_POST[ 'classiquePrice' ]; ?></span></p>
                <p><a href="Programs.php"><?php echo $_POST[ 'artsScience' ]; ?></a>
                    <span class="price"><?php echo $_POST[ 'artsSciencePrice' ]; ?></span></p>
                <p><a href="Programs.php"><?php echo $_POST[ 'enfantActif' ]; ?></a>
                    <span class="price"><?php echo $_POST[ 'enfantActifPrice' ]; ?></span></p>
                <hr>
                <p id="total_text">Totale : <span id="price" class="price">
                    <?php
                    echo $_POST[ "count" ] . "$";
                    ?>
                </span></p>
            </div>
        </div>
    </td>
    <td class="page">
        <div class="col-75">
            <h3>Information personnel</h3>
            <form id="inputs_bill" action="../PHP/confirmBill.php" method="POST">
                <table>
                    <tr>
                        <td><label for="first_name"><em class="fa fa-user"></em> Prénom (requis) </label></td>
                        <td><input type="text" id="first_name" name="first_name" placeholder="Prénom"></td>
                    </tr>
                    <tr>
                        <td><label for="last_name"><em class="fa fa-user"></em> Nom (requis) </label></td>
                        <td><input type="text" id="last_name" name="last_name" placeholder="Nom de famille"></td>
                    </tr>
                    <tr>
                        <td><label for="email"><em class="fa fa-envelope"></em> Courriel (requis)</label></td>
                        <td><input type="text" id="email" name="email" placeholder="...@exemple.com"></td>
                    </tr>
                    <tr>
                        <td><label for="address"><em class="fa fa-address-card-o"></em> Address (requis)</label></td>
                        <td><input type="text" id="address" name="address" placeholder="Adresse"></td>
                    </tr>
                    <tr>
                        <td><label for="city"><em class="fa fa-institution"></em> Ville (requis)</label></td>
                        <td><input type="text" id="city" name="city" placeholder="Ville"></td>
                    </tr>
                    <tr>
                        <td><label for="country">Pays (requis)</label></td>
                        <td><input type="text" id="country" name="country" placeholder="Pays"></td>
                    </tr>
                    <tr>
                        <td><label for="zip">Code postal (requis)</label></td>
                        <td><input type="text" id="zip" name="zip" placeholder="xxx xxx"></td>
                    </tr>
                </table>
                <hr>
                <h3 id="paiement">Paiement</h3>
                <div class="icon_card_container">
                    Cartes acceptés :
                    <em id="visa" class="fa fa-cc-visa"></em>
                    <em id="mastercard" class="fa fa-cc-mastercard"></em>
                </div>
                <br><br>
                <table>
                    <tr>
                        <td><label for="card_name">Nom sur la carte (requis)</label></td>
                        <td><input type="text" id="card_name" name="card_name" placeholder="Nom"></td>
                    </tr>
                    <tr>
                        <td><label for="card_number">Numéro de la carte (requis et restera confidentiel)</label></td>
                        <!--  Documentation: https://stackoverflow.com/questions/48534229/what-is-the-correct-input-type-for-credit-card-numbers -->
                        <td><input id="card_number" type="tel" inputmode="numeric" name="card_number"
                                   pattern="[0-9\s]{13,19}"
                                   autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"></td>
                    </tr>
                    <tr>
                        <td><label for="exp_month">Mois d'expiration (requis et restera confidentiel)</label></td>
                        <td><input type="text" id="exp_month" name="exp_month" placeholder="Mois"></td>
                    </tr>
                    <tr>
                        <td><label for="exp_year">Année d'expiration (requis et restera confidentiel)</label></td>
                        <td><input type="text" id="exp_year" name="exp_year" placeholder="Année"></td>
                    </tr>
                    <tr>
                        <td><label for="cvv">CVV (requis et restera confidentiel)</label></td>
                        <td><input type="password" id="cvv" name="cvv" placeholder="xxx"></td>
                    </tr>
                </table>
                <br>
                <hr>
                <input id="submit" value="Confirmer le paiment" class="btn" type="submit" name="done">
                <input id="total" name="total" type="hidden" value="<?php $_POST[ "count" ]; ?>">
            </form>
        </div>
    </td>
</table>
<!-- jQuery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../JS/form_validation_bill.js"></script>
<!-- JS -->
<script src="../JS/Main.js"></script>
</body>
</html>