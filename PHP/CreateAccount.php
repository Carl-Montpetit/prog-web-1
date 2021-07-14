<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
    header("Location: Login.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$password = md5($_POST['pw1']);
	$cpassword = md5($_POST['pw2']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (firstname, lastname, email, password)
					VALUES ('$firstname', '$lastname', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Enregistrement de l'utilisateur terminé!')</script>";
				$firstname = "";
				$lastname = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Erreur!')</script>";
			}
		} else {
			echo "<script>alert('L'email existe déjà.')</script>";
		}
		
	} else {
		echo "<script>alert('Le mot de passe ne correspond pas.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Adjust the display in function of the device -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- To link the file to the style sheet -->
        <link rel="stylesheet" href="../CSS/CreateAccount.css">

        <title>Créer un Compte</title>
    </head>
    <body>
        <header>
            <!-- The navbar -->
            <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
        </header>
        <h1>Création d'un compte</h1>

        <!-- Account creation form -->
        <div id="createAccountForm">
            <form id="inputs_createAccount" method="post" action="">
                <br>
                <label for="text">Prénom:</label><br>
                <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prénom" value="<?php echo $firstname; ?>" required>
                <br>
                <label for="text">Nom:</label><br>
                <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom" value="<?php echo $lastname; ?>" required><br>
                <label for="email">Courriel:</label><br>
                <input type="email" id="email" name="email" placeholder="Entrez votre courriel" value="<?php echo $email; ?>" required><br>
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="pw1" name="pw1" placeholder="Créer un mot de passe" value="<?php echo $_POST['password']; ?>" required><br>
                <input type="password" id="pw2" name="pw2" placeholder="Confirmez le mot de passe" value="<?php echo $_POST['cpassword']; ?>" required><br>
                <input id="cancel" class="button" type="reset" value="Annuler">
                <input class="button" type="submit" name = "submit" value="Enregistrer">
        </div>
    </body>
</html>