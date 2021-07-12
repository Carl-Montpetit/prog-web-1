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
                lettersonly: "L'entrée de votre prénom doit contenir que des lettres!",
                required: "S'il vous plait, veuillez entrer votre prénom!",
                maxWords: "Seulement un mot est autoriser pour le prénom!",
                rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20 inclusivement!"

            },
            last_name: {
                lettersonly: "L'entrée de votre nom doit contenir que des lettres!",
                required: "S'il vous plait, veuillez entrer votre prénom!",
                maxWords: "Seulement un mot est autoriser pour le prénom!",
                rangelength: "Le prénom doit contenir au minimum 3 lettres et au maximum 20 inclusivement!",
            },
            email: {
                required: "S'il vous plait, veuillez entrer votre adresse courriel!",
                email: "L'adresse courriel doit être du format adresse courriel (ex: abc123@gmail.com)",
                remote: "Ce courriel est déjà lié à un compte!",
            },
            pw1: {
                required: "S'il vous plait, veuillez entrer votre mot de passe!",
                pattern: "Le mot de passe doit contenir : 1 lettre majuscule, 1 lettre minuscule, 1 nombre et 8 caractères ou plus",
            },
            pw2: {
                required: "S'il vous plait, veuillez entrer le même mot de passe que ci-haut!",
                pattern: "Le mot de passe doit contenir : 1 lettre majuscule, 1 lettre minuscule, 1 nombre et 8 caractères ou plus",
            },
        },
    } );
});