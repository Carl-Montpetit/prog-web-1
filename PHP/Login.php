<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: Welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['pw']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Le courriel ou le mot de passe est incorrect.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- Adjust the display in function of the device -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- To link the file to the style sheet -->
        <link rel="stylesheet" href="../CSS/Login.css">
    </head>
    <body>
        <header>
            <!-- The navbar -->
            <iframe id="navbar" src="./navbar.php" frameborder="0"></iframe>
        </header>
        <h1>Se Connecter</h1>

        <div id="connectAccountForm">
            <form id="connectForm" method = "post" form action ="">
                <br>
                <label for="email">Courriel:</label><br>
                <input type="email" id="email" name="email" placeholder="Entrez votre courriel" value="<?php echo $email; ?>" required><br>
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="pw1" name="pw" placeholder="Créer un mot de passe" value="<?php echo $_POST['password']; ?>" required><br>
                <input id="cancel" class="button" type="reset" value="Annuler">
                <input class="button" type="submit" name = "submit" value="Se Connecter">
            </form>
        </div>
    </body>
</html>