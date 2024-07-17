<?php 
session_start();
$loggedIn = isset($_SESSION['name']);
$userName = $_SESSION['name'] ?? '';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kio Nails</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
    main 
    {
        font-family: 'Roboto', sans-serif;
        color: #d31b89;
    }
    nav ul li a.highlight 
    {
    font-weight: bold;
    font-size: 18px; 
    color: #FF5733; 
    }
    .user-info 
    {
            font-weight: bold;
            color: #FF5733;
            text-align: right;
            margin: 10px 20px;
    }
    </style>
</head>
    
    <h1>Kio Nails</h1>

    <h2>Műkörömépítés és Pedikür</h2>

<nav>
    <ul>
        <li><a href="index.php" class="highlight">Kezdőlap</a></li>
        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
        <li><a href="munkaim.php">Munkáim</a></li>
        <li><a href="idopontfoglalas.php">Időpontfoglalás</a></li>
        <li><a href="kapcsolat.php">Kapcsolat</a></li>
        <?php if ($loggedIn): ?>
                <li><a href="kijelentkezes.php">Kijelentkezés</a></li>
            <?php else: ?>
                <li><a href="bejelent.php">Bejelentkezés</a></li>
            <?php endif; ?>
            <?php if ($loggedIn): ?>
        <div class="user-info">Bejelentkezve: <?php echo htmlspecialchars($userName); ?></div>
        <?php endif; ?>
    </ul>
</nav>
<main>
        <p>Kéz-, és lábápolás, műkörömépítés
        Az arc mellett a kéz az a testrészünk, ami a legjobban látszik és láttat. Épp annyira egyéni, mint az arc, és sokat elárul tulajdonosáról. Hiába az ápolt haj és arc, az elegáns ruha és cipő, a jó modor és kommunikációs technika, ha a kéz ápolatlanságot tükröz. Kezeink és körmeink folyamatosan ki vannak téve az időjárás viszontagságainak (hideg, erős napfény, száraz levegő), a különböző vegyi behatások (tisztítószerek, vegyszerek, gyakori kézmosás, felületes szárítás). A házimunka és a foglakozásunkból adódó körülmények is sokat ronthatnak állapotukon, ezért ugyanúgy igénylik a folyamatos ápolást, mint testünk többi része. Szalonunkban nem csak a körmök díszítésére, de a kézbőr ápolására is nagy hangsúlyt fektetünk.  </p>

        <img src="media/korom.jpg" >
        <img src="media/korom1.jpg" >
        <img src="media/korom2.jpg" >
</main>

<ul>
    <li>Műkörömépítés</li>
    <li>Töltés</li>
    <li>Javítás</li>
    <li>Manikűr</li>
    <li>Pedikűr</li>
</ul>

<section>
            <a href=https://www.instagram.com/kiio.nails/target= target="_blank" rel="noopener"><img src="media/Instagram.png" ></a>
</section>
</html>