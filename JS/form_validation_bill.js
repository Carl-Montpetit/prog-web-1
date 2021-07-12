// User side validation
$( function () {
    $( "#inputs_bill" ).validate( { // initialize the form validation
        rules: {
            first_name: {
                required: true,
                rangelength: [ 3,20 ],
            },
            last_name: {
                required: true,
                rangelength: [ 3,20 ],
            },
            email: {
                required: true,
                email: true,
            },
            address: {
                required: true,
                rangelength: [ 3,20 ],
                remote: ""
            },
            zip: {
                required: true,
                pattern: "^(?!.*[DFIOQU])[A-VXY][0-9][A-Z] ?[0-9][A-Z][0-9]$",
            },
            city: {
                required: true,
                rangelength: [ 3,20 ],
            },
            country: {
                required: true,
            },
            card_name: {
                required: true,
                rangelength: [ 3,20 ],
            },
            card_number: {
                required: true,
                creditcard: true,
                pattern: "^(?!.*[DFIOQU])[A-VXY][0-9][A-Z] ?[0-9][A-Z][0-9]$",
            },
            exp_month: {
                required: true,
                rangelength: [ 3,20 ],
            },
            exp_year: {
                required: true,
                minlength: 4,
                maxlength: 4,
                number: false,
            },
            cvv: {
                required: true,
                minlength: 3,
                maxlength: 3,
                number: true,
            }
        },
        messages: {
            first_name: {
                required: "S'il vous plait, veuillez entrer votre prénom!",
                rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20!"

            },
            last_name: {
                required: "S'il vous plait, veuillez entrer votre nom de famille!",
                rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20!",
            },
            email: {
                required: "S'il vous plait, veuillez entrer votre adresse courriel!",
                email: "L'adresse courriel doit être du format adresse courriel (ex: abc123@gmail.com)",
                remote: "Ce courriel est déjà lié à un compte!",
            },
            address: {
                required: "S'il vous plait, veuillez entrer votre adresse!",
                rangelength: "L'adresse doit contenir entre 3 et 30 caractères!",
            },
            zip: {
                required: "S'il vous plait, veuillez entrer votre code postal!",
                pattern: "Le code postal n'existe pas, veuillez recommencer!",
            },
            city: {
                required: "S'il vous plait, veuillez entrer votre ville!",
                rangelength: "La ville doit contenir entre 3 et 20 lettres!"
            },
            country: {
                required: "S'il vous plait, veuillez entrer votre pays!",
            },
            card_name: {
                required: "S'il vous plait, veuillez entrer le nom sur la carte!",
                rangelength: "Le nom doit contenir entre 3 et 20 lettres!"
            },
            card_number: {
                required: "S'il vous plait, veuillez entrer le numéro de la carte!",
                creditcard: "S'il vous plait, ceci doit être un numéro de carte valide!",
                pattern: "Ceci doit être un numéro de carte valide!"
            },
            exp_month: {
                required: "S'il vous plait, veuillez entrer le nom de la carte!",
                rangelength: "Le mois d'expiration doit contenir entre 3 et 20 lettres!",
                number: "Le mois d'expiration doit contenir que des lettres!"
            },
            exp_year: {
                required: "S'il vous plait, veuillez entrer l'année d'expiration de la carte!",
                minlength: "L'année d'expiration doit contenir 4 nombres!",
                maxlength: "L'année d'expiration doit contenir 4 nombres!",
                number: "L'année d'expiration doit contenir que des nombres!"
            },
            cvv: {
                required: "S'il vous plait, veuillez entrer le CVV de la carte!",
                minlength: "Le CVV doit contenir 3 nombres!",
                maxlength: "Le CVV doit contenir 3 nombres!",
                number: "Le CVV doit contenir que des nombres!"
            },
        },
    } );
} );