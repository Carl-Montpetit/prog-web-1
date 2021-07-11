<!-- Documentation: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->
<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Paiement</title>
    <!-- Ajust the display in function of the screen -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- To link the file to the style sheet -->
    <link rel="stylesheet" href="../CSS/Bills.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Validation jQuery du form -->
    <script>
        $( document ).ready(
            function () { // attend que le chargement du document soit terminé avant d'executer le code qui suit

                $( '#inputs' ).validate( { // initialise la validation sur mon form
                    rules: {
                        prenom: {
                            lettersonly: true,
                            required: true,
                            maxWords: 1,
                            rangelength: [ 3,20 ],
                            monForm
                        },
                        nom: {
                            lettersonly: true,
                            required: true,
                            maxWords: 1,
                            rangelength: [ 3,20 ],
                        },
                        courriel: {
                            alphanumecic: true,
                            required: true,
                            email: true,
                            remote: "check-email.php", // pour valider que le courriel est unique
                        },
                        adresse: {
                            alphanumecic: true,
                            required: true,
                            maxWords: 1,
                            rangelength: [ 3,20 ],
                        },
                        codePostal: {
                            required: true,
                            pattern: "^(?!.*[DFIOQU])[A-VXY][0-9][A-Z] ?[0-9][A-Z][0-9]$",
                        },
                        ville: {
                            lettersonly: true,
                            required: true,
                            maxWords: 3,
                            rangelength: [ 3,20 ],
                        },
                        entrerPays: {
                            required: true,
                        },
                        motDePasse: {
                            required: true,
                            pattern: "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",
                        }
                    },
                    message: {
                        prenom: {
                            lettersonly: "L'entrée de votre prénom doit contenir que des lettres!",
                            required: "S'il vous plait, veuillez entrer votre prénom!",
                            maxWords: "Seulement un mot est autoriser pour le prénom!",
                            rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20 inclusivement!"

                        },
                        nom: {
                            lettersonly: "L'entrée de votre nom doit contenir que des lettres!",
                            required: "S'il vous plait, veuillez entrer votre prénom!",
                            maxWords: "Seulement un mot est autoriser pour le prénom!",
                            rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20 inclusivement!",
                        },
                        courriel: {
                            required: "S'il vous plait, veuillez entrer votre adresse courriel!",
                            email: "L'adresse courriel doit être du format adresse courriel (ex: abc123@gmail.com)",
                            remote: "Ce courriel est déjà lié à un compte!",
                        },
                        adresse: {
                            alphanumecic: "L'adresse n'existe pas, veuillez recommencer!",
                            required: "S'il vous plait, veuillez entrer votre adresse!",
                            rangelength: "L'adresse doit contenir entre 3 et 30 caractères inclusivement!",
                        },
                        codePostal: {
                            required: "S'il vous plait, veuillez entrer votre code postal!",
                            pattern: "Le code postal n'existe pas, veuillez recommencer!",
                        },
                        ville: {
                            lettersonly: "L'entrée de votre ville doit contenir que des lettres!",
                            required: "S'il vous plait, veuillez entrer votre ville!",
                            maxWords: "La ville peut contenir au maximum 3 mots!",
                            rangelength: "La ville doit contenir entre 3 et 20 lettres inclusivement!"
                        },
                        entrerPays: {
                            required: "S'il vous plait, veuillez selectionner votre pays dans la liste!",
                        },
                        motDePasse: {
                            required: "S'il vous plait, veuillez entrer votre mot de passe!",
                            pattern: "Le mot de passe doit contenir : 1 lettre majuscule, 1 lettre minuscule, 1 nombre et 8 caractères ou plus",
                        },
                    },
                } );

            } );
    </script>
</head>
<header>
    <iframe src="./navbar.php" frameborder="0"></iframe>
</header>
<body class>
<h1>Paiement de votre facture</h1>
<div class="row">
    <div class="col-75">
        <div class="container">
            <div class="row">
                <div class="col-50">
                    <h3>Information personnel</h3>
                    <form id="inputs_paiements">
                        <label for="fname"><em class="fa fa-user"></em> Prénom </label>
                        <input type="text" id="fname" name="firstname" placeholder="Carl">
                        <label for="fname"><em class="fa fa-user"></em> Nom </label>
                        <input type="text" id="lname" name="lastname" placeholder="Montpetit">
                        <br><br>
                        <label for="email"><em class="fa fa-envelope"></em> Courriel</label>
                        <input type="text" id="email" name="email" placeholder="...@exemple.com">
                        <br><br>
                        <label for="adr"><em class="fa fa-address-card-o"></em> Addresse</label>
                        <input type="text" id="adr" name="address" placeholder="1234 rue Lacordaire">
                        <br><br>
                        <label for="city"><em class="fa fa-institution"></em> Ville</label>
                        <input type="text" id="city" name="city" placeholder="Montréal">
                        <br><br>
                        <label for="country">Pays</label>
                        <input type="text" id="country" name="country" placeholder="Canada">
                        <br><br>
                        <label for="zip">Code postal</label>
                        <input type="text" id="zip" name="zip" placeholder="H2M3H1">
                        <hr>
                        <div class="col-50">
                            <h3>Paiement</h3>
                            <label id="accepted_card" fname">Cartes acceptés :</label>
                            <div class="icon_card_container">
                                <em class="fa fa-cc-visa" style="color:navy;"></em>
                                <em class="fa fa-cc-mastercard" style="color:red;"></em>
                            </div>
                            <br><br>
                            <label for="cname">Nom sur la carte</label>
                            <input type="text" id="cname" name="cardname" placeholder="Carl Montpetit">
                            <br><br>
                            <label for="ccnum">Numéro de la carte</label>
                            <!--  Documentation: https://stackoverflow.com/questions/48534229/what-is-the-correct-input-type-for-credit-card-numbers -->
                            <input id="ccnum" type="tel" inputmode="numeric" name="ccnum" pattern="[0-9\s]{13,19}"
                                   autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                            <br><br>
                            <label for="expmonth">Mois d'expiration</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="Septembre">
                            <br><br>
                            <label for="expyear">Année d'expiration</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2025">
                            <br><br>
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="354">
                            <br><br>
                        </div>
                    </form>
                </div>
            <hr>
            </div>
            <label>
                <input type="checkbox" checked="checked" name="same_adress"> L'adresse de livraison est la même que
                celle du
                paiement
            </label>
            <input id="submit" value="Continuer pour payer" class="btn" type="button" name="done">
        </div>
    </div>
    <div class="col-25">
        <div id="cart_container" class="container">
            <h3 id="panier_title">Votre panier</h3>
            <label id="cart_title"><i id="cart" class="fa fa-shopping-cart"> 3</i>
            </label>
            <p><a href="#">Le classique</a> <span class="price">100$</span></p>
            <p><a href="#">Art et Science</a> <span class="price">150$</span></p>
            <p><a href="#">L'enfant actif</a> <span class="price">100$</span></p>
            <hr>
            <p id="total_text">Totale : <span id="price" class="price"
                                              style="color:purple"><strong>350$</strong></span></p>
        </div>
    </div>
</div>

</body>

</html>