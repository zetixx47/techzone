<?php
session_start(); // Rozpocznij sesję
$isLoggedIn = isset($_SESSION['username']); // Sprawdzenie, czy użytkownik jest zalogowany
$username = $isLoggedIn ? $_SESSION['username'] : ''; // Pobranie nazwy użytkownika
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1><a href="index.php"><img src="TechZone.png" alt="Logo"></a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="#podzespoly">Podzespoły</a></li>
                <li><a href="#akcesoria">Akcesoria</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
                <?php if ($isLoggedIn): ?>
                    <li>Witaj, <?php echo htmlspecialchars($username); ?></li>
                    <li><a href="logout.php">Wyloguj</a></li>
                <?php else: ?>
                    <li><a href="logowanie.php">Logowanie</a></li>
                    <li><a href="rejestracja.php">Rejestracja</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Podkładka SteelSeries QcK Prism Cloth 5XL</h2>
        <a href="https://www.x-kom.pl/p/1246681-podkladka-pod-mysz-steelseries-qck-prism-cloth-5xl.html"><h2><img class="specfoto" src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/5/pr_2024_5_21_12_35_8_568_00.jpg" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Materiał</p><br>
                <p>Szerokość</p><br>
                <p>Wysokość</p><br>
                <p>Grubość</p><br>
                <p>Kolor</p><br>
                <p>Podświetlenie</p><br>
                <p>Dodatkowe informacje</p><br>
                <p>Gwarancja</p><br><br>
                <p>Kod producenta</p><br>
            </div>
            <div class="parametryspec">
                <p>
                Tkanina</p><br>
                <p>
                1500 mm</p><br>
                <p>
                800 mm</p><br>
                <p>
                4 mm</p><br>
                <p>
                Czarny</p><br>
                <p>
                RGB</p><br>
                <p>
                Antypoślizgowy spód</p><br>
                <p>
                24 miesiące (gwarancja sprzedawcy)</p><br>
                <p>
                63524</p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>