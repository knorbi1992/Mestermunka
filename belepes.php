<?php 
session_start();
$loggedIn = isset($_SESSION['name']) ? 'true' : 'false';
$userName = $_SESSION['name'] ?? '';

$loggedIn = isset($_SESSION['user_name']);
$userName = $_SESSION['name'] ?? '';
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kio Nails</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<header>
    <h1 id="welcome-message">Üdvözöllek, <span id="user-name"><?php echo htmlspecialchars($userName); ?></span></h1>
    <nav>
        <a href="idopontfoglalas.php" id="home-link">Belépés</a>
        <a href="kijelentkezes.php" id="logout-link">Kijelentkezés</a>
    </nav>
</header>
<script>
    const loggedIn = <?php echo $loggedIn; ?>;
    const userName = "<?php echo htmlspecialchars($userName); ?>";
</script>
<script src="script.js"></script>
</html>

