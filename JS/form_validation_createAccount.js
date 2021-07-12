// User side validation
$().ready(function () { // wait for the document to be loaded before start the code down here

    $( "#inputs_createAccount" ).validate( { // initialize the form validation
        rules: {
            firstname: {
                lettersonly: true,
                required: true,
                maxWords: 1,
                rangelength: [ 3,20 ],
            },
            lastname: {
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
            password: {
                required: true,
                pattern: "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",
            },
            confirm_password: {
                required: true,
                pattern: "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",
                equalTo: "#pw"
            }
        },
        messages: {
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
            password: {
                required: "S'il vous plait, veuillez entrer votre mot de passe!",
                pattern: "Le mot de passe doit contenir : 1 lettre majuscule, 1 lettre minuscule, 1 nombre et 8 caractères ou plus",
            },
            confirm_password: {
                required: "S'il vous plait, veuillez entrer le même mot de passe que ci-haut!",
                pattern: "Le mot de passe doit contenir : 1 lettre majuscule, 1 lettre minuscule, 1 nombre et 8 caractères ou plus",
            },
        },
    } );
});