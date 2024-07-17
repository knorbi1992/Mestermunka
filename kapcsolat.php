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
    <title>Kapcsolat | Kio Nails</title>
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
    
    <h1>Kio Nails</h1>

    <h2>Műkörömépítés és Pedikür</h2>

<nav>
    <ul> 
        <li><a href="index.php">Kezdőlap</a></li>
        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
        <li><a href="munkaim.php">Munkáim</a></li>
        <li><a href="idopontfoglalas.php">Időpontfoglalás</a></li>
        <li><a href="kapcsolat.php" class="highlight">Kapcsolat</a></li>
        <?php if ($loggedIn): ?>
                <li><a href="kijelentkezes.php">Kijelentkezés</a></li>
            <?php else: ?>
                <li><a href="bejelent.php">Bejelentkezés</a></li>
            <?php endif; ?>
            <?php if ($loggedIn): ?>
        <div class="user-info">Bejelentkezve: <?php echo htmlspecialchars($userName); ?></div>
        <?php endif; ?>
    </ul>
    <img src="media/en1.jpg" >
</nav>
<h3>Kovács Kitti</h3>
<main>
    <img src="media/szalon1.jpg" >
    <img src="media/szalon2.jpg" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.228389865591!2d20.159434975806338!3d46.2655652796158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744881a94d6d5cf%3A0xd1edef91e1cece16!2sSzeged%2C%20R%C3%B3na%20u.%2032%2C%206723!5e0!3m2!1shu!2shu!4v1719228166703!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>Nyitvatartás:
            H-P: 8:00 - 17:00   Szo: 8:00 - 12:00   Vas: zárva</p>


    <p>Cím: 6723, Szeged Róna utca 32.</p>
    <p>Telefon: +36 70 670-5348</p>
    <p>Email: kittike0608@icloud.com </p>

</main>


<section>
            <a href=https://www.instagram.com/kiio.nails/target= target="_blank" rel="noopener"><img src="media/Instagram.png" ></a>
</section>
</html>