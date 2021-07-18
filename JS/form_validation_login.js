// User side validation
$().ready( function () { // wait for the document to be loaded before start the code down here

    $( "#inputs_createAccount" ).validate( { // initialize the form validation
        rules: {
            email: {
                alphanumecic: true,
                required: true,
                email: true,
                remote: "check-email.php", // pour valider que le courriel est unique
            },

            pw1: {
                required: true,
                pattern: "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",
            },
        },
        messages: {
            email: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre adresse courriel!" + "</span>",
                email: "<br>" + "<span class='err'>" + "L'adresse courriel doit être du format adresse courriel (ex:" +
                    " abc123@gmail.com)" + "</span>",
                remote: "<br>" + "<span class='err'>" + "Ce courriel est déjà lié à un compte!" + "</span>",
            },
            pw1: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre mot de passe!" + "</span>",
                pattern: "<br>" + "<span class='err'>" + "Le mot de passe doit contenir : 1 lettre majuscule, 1" +
                    " lettre minuscule, 1 nombre et 8 caractères ou plus" + "</span>",
            },
        },
    } );
} );