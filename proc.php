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
        <h2>Procesor AMD Ryzen 9 9950X</h2>
        <a href="https://www.x-kom.pl/p/1268707-procesor-amd-ryzen-9-amd-ryzen-9-9950x.html"><h2><img class="specfoto" src="procek.png" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Rodzina procesorów</p><br>
                <p>Seria procesora</p><br>
                <p>Gniazdo procesora (socket)</p><br>
                <p>Obsługiwany chipset</p><br><br><br><br><br><br><br><br><br><br><br>
                <p>Architektura</p><br>
                <p>Taktowanie rdzenia</p><br>
                <p>Liczba rdzeni fizycznych</p><br>
                <p>Liczba wątków</p><br>
                <p>Odblokowany mnożnik</p><br>
                <p>Pamięć podręczna</p><br>
                <p>Zintegrowany układ graficzny</p><br>
                <p>Model układu graficznego</p><br>
                <p>Rodzaj obsługiwanej pamięci</p><br><br><br>
                <p>Proces litograficzny</p><br><br>
                <p>Pobór mocy (TDP)</p><br>
                <p>Zastosowane technologie</p><br><br>
                <p>Dodatkowe informacje</p><br><br>
                <p>Chłodzenie w zestawie</p><br>
                <p>Gwarancja</p><br><br>
                <p>Kod producenta</p><br>
            </div>
            <div class="parametryspec">
            <p>AMD Ryzen™</p><br>
                <p>Ryzen™ 9 9950X</p><br>
                <p>Socket AM5</p><br>
                <p>X670<br><br>
                    X670E<br><br>
                    B650E<br><br>
                    B650<br><br>
                    A620<br><br>
                    X870E</p><br>
                <p>Zen 5</p><br>
                <p>4.3 GHz (5.7 GHz w trybie turbo)</p><br>
                <p>16 rdzeni</p><br>
                <p>32 wątki</p><br>
                <p>Tak</p><br>
                <p>80 MB</p><br>
                <p>Tak</p><br>
                <p>Radeon™ Graphics</p><br>
                <p>DDR5-5600<br>
                DDR5-3600</p><br><br>
                <p>
                4 nm</p><br><br>
                <p>
                170 W</p><br>
                <p>AMD EXPO™<br>
                AMD Precision Boost 2</p><br>
                <p>Obsługa pamięci ECC<br>
                Wersja BOX</p><br>
                <p>Nie</p><br>
                <p>36 miesięcy (gwarancja producenta)</p><br>
                <p>
                100-100001277WOF</p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>