<?php 
session_start();
$loggedIn = isset($_SESSION['name']);
$userName = $_SESSION['name'] ?? '';

// Kapcsolódás az adatbázishoz
include "db_conn.php";

// Ellenőrzés, hogy a felhasználó be van-e jelentkezve
if (!$loggedIn) 
{
    header("Location: bejelent.php?error=Be kell jelentkeznie az időpontfoglaláshoz.");
    exit();
}

// Bejegyzés mentése
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $date = $_POST['date'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    $userId = $_SESSION['id']; // Felhasználó azonosító

    // SQL bejegyzés beszúrása
    $stmt = $conn->prepare("INSERT INTO idopont (user, date, time, note) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $userName, $date, $time, $note);
    $stmt->execute();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Időpontfoglalás | Kio Nails</title>
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
        form 
        {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input, textarea, button 
        {
            background-color: white;
            text-align: center;
            margin: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>Kio Nails</h1>
    <h2>Műkörömépítés és Pedikür</h2>

    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
            <li><a href="munkaim.php">Munkáim</a></li>
            <li><a href="idopontfoglalas.php" class="highlight">Időpontfoglalás</a></li>
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

    <form method="POST">
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <textarea name="note" placeholder="Írja ide mit szeretne..." required></textarea>
        <button type="submit">Mentés</button>
    </form>

    <section>
        <a href="https://www.instagram.com/kiio.nails/" target="_blank" rel="noopener"><img src="media/Instagram.png"></a>
    </section>
</body>
</html>