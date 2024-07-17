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
    <title>Munkáim | Kio Nails</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
        <li><a href="munkaim.php" class="highlight">Munkáim</a></li>
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
<body>
    <div class="container">
      <div class="image-container">
        <div class="image"><img src="korommunkaim/korom1.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom2.jpg" alt=""></div>        
        <div class="image"><img src="korommunkaim/korom3.jpg" alt=""></div>        
        <div class="image"><img src="korommunkaim/korom4.jpg" alt=""></div>        
        <div class="image"><img src="korommunkaim/korom5.jpg" alt=""></div>        
        <div class="image"><img src="korommunkaim/korom6.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom7.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom8.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom9.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom10.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom11.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom12.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom13.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom14.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom15.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom16.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom17.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom18.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom19.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom20.jpg" alt=""></div>
        <div class="image"><img src="korommunkaim/korom21.jpg" alt=""></div>
      <div class="popup-image">
        <span>&times;</span>
        <img src="korommunkaim/korom1.jpg" alt="">
        <style>{margin:0; padding:0; box-sizing:border-box;}</style>
      </div>
    </div>
<script>
    document.querySelectorAll('.image-container img').forEach(image => image.onclick = () =>
        {
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        });
    document.querySelector('.popup-image span').onclick = () =>
    {
            document.querySelector('.popup-image').style.display = 'none';
    }
</script>
    </body>

<section>
            <a href=https://www.instagram.com/kiio.nails/target= target="_blank" rel="noopener"><img src="media/Instagram.png" ></a>
</section>
</html>