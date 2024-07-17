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
    <title>Bejelentkezés | Kio Nails</title>
    <link rel="stylesheet" href="style.css">
    <style>
    nav ul li a.highlight 
    {
        font-weight: bold;
        font-size: 18px; 
        color: #FF5733; 
    }

    </style>
</head>
    
    <h1>Kio Nails</h1>

    <h2>Műkörömépítés és Pedikür</h2>

<nav>
    <ul>
    <?php if ($loggedIn): ?>
                <li><a href="kijelentkezes.php">Kijelentkezés</a></li>
            <?php else: ?>
                <li><a href="bejelent.php" class="highlight">Bejelentkezés</a></li>
            <?php endif; ?>
        <li><a href="index.php">Kezdőlap</a></li>
    </ul>
</nav>
<header>
<style>input, select, extarea, fieldset { margin-bottom: 10px; } </style>
<form action="bejelentkezes.php" method="post">
     	<?php if (isset($_GET['error'])) 
                { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p><?php 
                } ?>
     	<label>Felhasználónév</label>
     	<input type="text" name="uname" placeholder="Felhasználónév"><br>

     	<label>Jelszó</label>
     	<input type="password" name="password" placeholder="Jelszó"><br>

     	<button type="submit">Bejelentkezés</button>
         <p>Nem vagy még regisztrálva? <a href="regiszt.php">Regisztráció</a></p>
     </form>
</header>

</form>


<main>
        <p>Kézápoló és műkörömépítő szakmát végeztem, és nagyon szerencsésnek mondhatom magam, mert a hobbim egyben a munkám is. Igyekszem mindig képezni magam, hogy a vendégeim minden elvárását teljesítsem. Várok minden kedves meglévő és leendő vendégem nagyon sok szeretettel!</p>


</main>

<section>
            <a href=https://www.instagram.com/kiio.nails/target= target="_blank" rel="noopener"><img src="media/Instagram.png" ></a>
</section>
</html>
