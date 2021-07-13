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
<div class="col-75">
    <h3>Information personnel</h3>
    <form id="inputs_bill" action="../PHP/confirmBill.php" method="POST">
        <label for="first_name"><em class="fa fa-user"></em> Prénom (requis) </label>
        <input type="text" id="first_name" name="first_name" placeholder="Prénom">
        <br><br>
        <label for="last_name"><em class="fa fa-user"></em> Nom (requis) </label>
        <input type="text" id="last_name" name="last_name" placeholder="Nom de famille">
        <br><br>
        <label for="email"><em class="fa fa-envelope"></em> Courriel (requis)</label>
        <input type="text" id="email" name="email" placeholder="...@exemple.com">
        <br><br>
        <label for="address"><em class="fa fa-address-card-o"></em> Address (requis)</label>
        <input type="text" id="address" name="address" placeholder="Adresse">
        <br><br>
        <label for="city"><em class="fa fa-institution"></em> Ville (requis)</label>
        <input type="text" id="city" name="city" placeholder="Ville">
        <br><br>
        <label for="country">Pays (requis)</label>
        <input type="text" id="country" name="country" placeholder="Pays">
        <br><br>
        <label for="zip">Code postal (requis)</label>
        <input type="text" id="zip" name="zip" placeholder="xxx xxx">
        <hr>
        <h3>Paiement</h3>
        <div class="icon_card_container">
            Cartes acceptés :
            <em id="visa" class="fa fa-cc-visa"></em>
            <em id="mastercard" class="fa fa-cc-mastercard"></em>
        </div>
        <br><br>
        <label for="card_name">Nom sur la carte (requis)</label>
        <input type="text" id="card_name" name="card_name" placeholder="Nom">
        <br><br>
        <label for="card_number">Numéro de la carte (requis et restera confidentiel)</label>
        <!--  Documentation: https://stackoverflow.com/questions/48534229/what-is-the-correct-input-type-for-credit-card-numbers -->
        <input id="card_number" type="tel" inputmode="numeric" name="card_number" pattern="[0-9\s]{13,19}"
               autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
        <br><br>
        <label for="exp_month">Mois d'expiration (requis et restera confidentiel)</label>
        <input type="text" id="exp_month" name="exp_month" placeholder="Mois">
        <br><br>
        <label for="exp_year">Année d'expiration (requis et restera confidentiel)</label>
        <input type="text" id="exp_year" name="exp_year" placeholder="Année">
        <br><br>
        <label for="cvv">CVV (requis et restera confidentiel)</label>
        <input type="password" id="cvv" name="cvv" placeholder="xxx">
        <br><br>
        <input type="checkbox" checked="checked" name="same_adress"> L'adresse de livraison est la même
        que celle du paiement
        <br><br>
        <hr>
        <input id="submit" value="Confirmer le paiment" class="btn" type="submit" name="done">
    </form>
</div>
<div class="col-25">
    <div id="cart_container" class="container">
        <h3 id="panier_title">Votre panier</h3>
        <label id="cart_title"><em id="cart" class="fa fa-shopping-cart"> 3</em>
        </label>
        <p><a href="Programs.php">Le classique</a> <span class="price">100$</span></p>
        <p><a href="Programs.php">Art et Science</a> <span class="price">150$</span></p>
        <p><a href="Programs.php">L'enfant actif</a> <span class="price">100$</span></p>
        <hr>
        <p id="total_text">Totale : <span id="price" class="price">350$</span></p>
    </div>
</div>
<!-- jQuery -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../JS/form_validation_bill.js"></script>
<!-- JS -->
<script src="../JS/Main.js"></script>
</body>
</html>