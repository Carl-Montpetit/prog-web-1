<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: Main.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <?php echo "<h1>Bienvenue " . $_SESSION['email'] . "</h1>"; ?>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>