// User side validation
$( function () {
    $( "#inputs_bill" ).validate( { // initialize the form validation
        rules: {
            first_name: {
                required: true,
                rangelength: [ 3, 20 ],
            },
            last_name: {
                required: true,
                rangelength: [ 3, 20 ],
            },
            email: {
                required: true,
                email: true,
            },
            address: {
                required: true,
                rangelength: [ 3, 20 ],
                remote: ""
            },
            zip: {
                required: true,
                pattern: "/^(?!.*[DFIOQU])[A-VXY][0-9][A-Z] ?[0-9][A-Z][0-9]$/",
            },
            city: {
                required: true,
                rangelength: [ 3, 20 ],
            },
            country: {
                required: true,
            },
            card_name: {
                required: true,
                rangelength: [ 3, 20 ],
            },
            card_number: {
                required: true,
                creditcard: true,
                pattern: "/^(?!.*[DFIOQU])[A-VXY][0-9][A-Z] ?[0-9][A-Z][0-9]$/",
            },
            exp_month: {
                required: true,
                rangelength: [ 3, 20 ],
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
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre prénom!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le prénom doit contenir au minimum 3 lettres et au maximum 20!" + "</span>"

            },
            last_name: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre nom de famille!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le prénom doit contenir au minimum 3 lettres et au maximum 20!" + "</span>",
            },
            email: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre adresse courriel!" + "</span>",
                email: "<br>" + "<span class='err'>" + "L'adresse courriel doit être du format adresse courriel (ex: abc123@gmail.com)" + "</span>",
                remote: "<br>" + "<span class='err'>" + "Ce courriel est déjà lié à un compte!" + "</span>",
            },
            address: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre adresse!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "L'adresse doit contenir entre 3 et 30 caractères!" + "</span>",
            },
            zip: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre code postal!" + "</span>",
                pattern: "<br>" + "<span class='err'>" + "Le code postal n'existe pas, veuillez recommencer!" + "</span>",
            },
            city: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre ville!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "La ville doit contenir entre 3 et 20 lettres!" + "</span>"
            },
            country: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre pays!" + "</span>",
            },
            card_name: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer le nom sur la carte!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le nom doit contenir entre 3 et 20 lettres!" + "</span>"
            },
            card_number: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer le numéro de la carte!" + "</span>",
                creditcard: "<br>" + "<span class='err'>" + "S'il vous plait, ceci doit être un numéro de carte valide!" + "</span>",
                pattern: "<br>" + "<span class='err'>" + "Ceci doit être un numéro de carte valide!"
            },
            exp_month: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer le nom de la carte!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le mois d'expiration doit contenir entre 3 et 20 lettres!" + "</span>",
                number: "<br>" + "<span class='err'>" + "Le mois d'expiration doit contenir que des lettres!" + "</span>"
            },
            exp_year: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer l'année d'expiration de la carte!" + "</span>",
                minlength: "<br>" + "<span class='err'>" + "L'année d'expiration doit contenir 4 nombres!" + "</span>",
                maxlength: "<br>" + "<span class='err'>" + "L'année d'expiration doit contenir 4 nombres!" + "</span>",
                number: "<br>" + "<span class='err'>" + "L'année d'expiration doit contenir que des nombres!" + "</span>"
            },
            cvv: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer le CVV de la carte!" + "</span>",
                minlength: "<br>" + "<span class='err'>" + "Le CVV doit contenir 3 nombres!" + "</span>",
                maxlength: "<br>" + "<span class='err'>" + "Le CVV doit contenir 3 nombres!" + "</span>",
                number: "<br>" + "<span class='err'>" + "Le CVV doit contenir que des nombres!" + "</span>"
            },
        },
    } );
} );