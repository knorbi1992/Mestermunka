<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció | Kio Nails</title>
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
         <li><a href="bejelent.php">Bejelentkezés</a></li>
        <li><a href="regisztracio.php" class="highlight">Regisztráció</a></li>
        <li><a href="index.php">Kezdőlap</a></li>
    </ul>
</nav>

</html>

   </head>
   <header> 
   <style>input, select, extarea, fieldset { margin-bottom: 10px; } </style>
   <form action="regisztracio.php" method="post">
     	<h2>Regisztrációs adatok</h2>
     	<?php if (isset($_GET['error'])) 
            { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>

            <?php if (isset($_GET['success'])) 
            { ?> <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Teljes név</label>
            <?php if (isset($_GET['name'])) 
            { ?>       <input type="text" 
                      name="name" 
                      placeholder="Tejles név"
                      value="<?php echo $_GET['name']; ?>"><br> <?php 
            }
            else  { ?>  <input type="text" 
                       name="name" 
                       placeholder="Teljes név"><br> <?php 
                  }?>

          <label>Felhasználónév</label>
          <?php if (isset($_GET['uname'])) 
                { ?> <input type="text" 
                      name="uname" 
                      placeholder="Felhasználónév"
                      value="<?php echo $_GET['uname']; ?>"><br> <?php 
                }
                    
          else  { ?>   <input type="text" 
                       name="uname" 
                       placeholder="Felhasználónév"><br> <?php 
                }?>

     	<label>Jelszó</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Jelszó"><br>

          <label>Jelszó újra</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Jelszó újra"><br>

     	<button type="submit">Regisztráció</button>
          <p><a href="bejelent.php">Van már fiókja?</a></p>
        </form>
    </header>
</html>
<main>
        <p>Kézápoló és műkörömépítő szakmát végeztem, és nagyon szerencsésnek mondhatom magam, mert a hobbim egyben a munkám is. Igyekszem mindig képezni magam, hogy a vendégeim minden elvárását teljesítsem. Várok minden kedves meglévő és leendő vendégem nagyon sok szeretettel!</p>


</main>


<section>            <a href=https://www.instagram.com/kiio.nails/target= target="_blank" rel="noopener"><img src="media/Instagram.png" ></a></section>