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
    <title>Szolgáltatások | Kio Nails</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        main
        {
            font-family: 'Roboto', sans-serif;
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
<body>

    <h1>Kio Nails</h1>

    <h2>Műkörömépítés és Pedikür</h2>

    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="szolgaltatasok.php" class="highlight">Szolgáltatások</a></li>
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
        <p>Kézápoló és műkörömépítő szakmát végeztem, és nagyon szerencsésnek mondhatom magam, mert a hobbim egyben a munkám is. Igyekszem mindig képezni magam, hogy a vendégeim minden elvárását teljesítsem. Várok minden kedves meglévő és leendő vendégem nagyon sok szeretettel!</p>


    <ul>
        <li>Géllakk kézre</li>
        <li>Épített köröm (zselés)</li>
        <li>Töltés (zselé)</li>
        <li>Francia géllakk</li>
        <li>Japán manikűr</li>
        <li>Manikűr</li>
        <li>Műköröm/Gél lakk eltávolítás+manikűr</li>
        <li>Paraffinos kézápolás</li>
        <li>Callux Pedikűr</li>
        <li>Pedikűr</li>
        <li>Géllakk lábra</li>
        <li>Géllak eltávolítás lábról</li>
        <li>Francia géllak lábra</li>
    </ul>

    </main>
    <section>
        <a href="https://www.instagram.com/kiio.nails/" target="_blank" rel="noopener"><img src="media/Instagram.png"></a>
    </section>
</body>
</html>