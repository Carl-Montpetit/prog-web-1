// User side validation
$().ready(function () { // wait for the document to be loaded before start the code down here

    $( "#inputs_createAccount" ).validate( { // initialize the form validation
        rules: {
            first_name: {
                lettersonly: true,
                required: true,
                maxWords: 1,
                rangelength: [ 3,20 ],
            },
            last_name: {
                lettersonly: true,
                required: true,
                maxWords: 1,
                rangelength: [ 3,20 ],
            },
            email: {
                alphanumecic: true,
                required: true,
                email: true,
                remote: "check-email.php", // pour valider que le courriel est unique
            },

            pw1: {
                required: true,
                pattern: "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",
            },
            pw2: {
                required: true,
                pattern: "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",
                equalTo: "#pw"
            }
        },
        messages: {
            first_name: {
                lettersonly: "<br>" + "<span class='err'>" + "L'entrée de votre prénom doit contenir que des" +
                    " lettres!" + "</span>",
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre prénom!" + "</span>",
                maxWords: "<br>" + "<span class='err'>" + "Seulement un mot est autoriser pour le prénom!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le prénom doit contenir au minimum 3 lettres et au" +
                    " maximum 20 inclusivement!" + "</span>"

            },
            last_name: {
                lettersonly: "<br>" + "<span class='err'>" + "L'entrée de votre nom doit contenir que des lettres!" + "</span>",
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer votre prénom!" + "</span>",
                maxWords: "<br>" + "<span class='err'>" + "Seulement un mot est autoriser pour le prénom!" + "</span>",
                rangelength: "<br>" + "<span class='err'>" + "Le prénom doit contenir au minimum 3 lettres et au" +
                    " maximum 20 inclusivement!" + "</span>",
            },
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
            pw2: {
                required: "<br>" + "<span class='err'>" + "S'il vous plait, veuillez entrer le même mot de passe que" +
                    " ci-haut!" + "</span>",
                pattern: "<br>" + "<span class='err'>" + "Le mot de passe doit contenir : 1 lettre majuscule, 1" +
                    " lettre minuscule, 1 nombre et 8 caractères ou plus" + "</span>",
            },
        },
    } );
});