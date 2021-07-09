<!-- Documentation: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->
<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Paiement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/Bills.css">
</head>

<body>
<h1>Paiement de votre facture</h1>
<div class="row">
    <div class="col-75">
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <h3>Information personnel</h3>
                    <label for="fname"><em class="fa fa-user"></em> Nom complet</label>
                    <input type="text" id="fname" name="firstname" placeholder="Carl Montpetit">
                    <label for="email"><em class="fa fa-envelope"></em> Courriel</label>
                    <input type="text" id="email" name="email" placeholder="...@exemple.com">
                    <label for="adr"><em class="fa fa-address-card-o"></em> Addresse</label>
                    <input type="text" id="adr" name="address" placeholder="1234 rue Lacordaire">
                    <label for="city"><em class="fa fa-institution"></em> Ville</label>
                    <input type="text" id="city" name="city" placeholder="Montréal">

                    <div class="row">
                        <div class="col-50">
                            <label for="country">Pays</label>
                            <input type="text" id="country" name="country" placeholder="Canada">
                        </div>
                        <div class="col-50">
                            <label for="zip">Code postal</label>
                            <input type="text" id="zip" name="zip" placeholder="H2M3H1">
                        </div>
                    </div>
                </div>

                <div class="col-50">
                    <h3>Paiement</h3>
                    <label for="fname">Cartes acceptés</label>
                    <div class="icon-container">
                        <em class="fa fa-cc-visa" style="color:navy;"></em>
                        <em class="fa fa-cc-mastercard" style="color:red;"></em>
                    </div>
                    <label for="cname">Nom sur la carte</label>
                    <input type="text" id="cname" name="cardname" placeholder="Carl Montpetit">
                    <label for="ccnum">Numéro de la carte</label>
                    <!--  Documentation: https://stackoverflow.com/questions/48534229/what-is-the-correct-input-type-for-credit-card-numbers -->
                    <input id="ccnum" type="tel" inputmode="numeric" name="ccnum" pattern="[0-9\s]{13,19}"
                           autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                    <label for="expmonth">Mois d'expiration</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="Septembre">
                    <div class="row">
                        <div class="col-50">
                            <label for="expyear">Année d'expiration</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2025">
                        </div>
                        <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="354">
                        </div>
                    </div>
                </div>

            </div>
            <label>
                <input type="checkbox" checked="checked" name="sameadr"> L'adresse de livraison est la même que celle du
                paiement
            </label>
            <input type="submit" value="Continuer pour payer" class="btn">
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Panier <span class="price" style="color:black"><em class="fa fa-shopping-cart"></>
                            <strong>3</strong></span>
            </h4>
            <p><a href="#">Le classique</a> <span class="price">100$</span></p>
            <p><a href="#">Art et Science</a> <span class="price">150$</span></p>
            <p><a href="#">L'enfant actif</a> <span class="price">100$</span></p>
            <hr>
            <p>Totale : <span class="price" style="color:purple"><strong>350$</strong></span></p>
        </div>
    </div>
</div>

</body>

</html>