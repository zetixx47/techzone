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
        <h2>Mysz Razer DeathAdder V3 Pro</h2>
        <a href="https://www.x-kom.pl/p/1230328-myszka-bezprzewodowa-razer-deathadder-v3-pro-hyperpolling-dongle.html"><h2><img class="specfoto" src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/3/pr_2024_3_18_7_25_56_723_00.jpg" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Typ myszy</p><br>
                <p>Łączność</p><br>
                <p>Sensor</p><br>
                <p>Rozdzielczość</p><br>
                <p>Liczba przycisków</p><br>
                <p>Rolka przewijania</p><br>
                <p>Interfejs</p><br>
                <p>Zasilanie</p><br>
                <p>Czas pracy na baterii</p><br>
                <p>Profil</p><br>
                <p>Podświetlenie</p><br>
                <p>Dodatkowe informacje</p><br><br><br><br><br><br><br><br><br><br><br>
                <p>Dołączone akcesoria</p><br><br><br>
                <p>Kolor</p><br>
                <p>Długość</p><br>
                <p>Szerokość</p><br>
                <p>Wysokość</p><br>
                <p>Waga</p><br>
                <p>Gwarancja</p><br><br>
                <p>Kod producenta</p><br>
            </div>
            <div class="parametryspec">
                <p>Dla graczy</p><br>
                <p>Przewodowa
                Bezprzewodowa</p><br>
                <p>Optyczny</p><br>
                <p>30000 dpi</p><br>
                <p>5</p><br>
                <p>1</p><br>
                <p>2,4 GHz
                USB</p><br>
                <p>Wbudowany akumulator</p><br>
                <p>
                Do 90 godzin</p><br>
                <p>Praworęczny</p><br>
                <p>Brak</p><br>
                <p>Teflonowe ślizgacze<br>
                    Kabel w oplocie<br>
                    Odpinany kabel USB<br>
                    Przełączniki optyczne<br>
                    Programowalne przyciski<br>
                    Profile ustawień<br>
                    70 G akceleracji<br>
                    Żywotność 90 milionów kliknięć<br>
                    1000 Hz Ultrapolling<br>
                    8000 Hz Ultrapolling<br>
                    Regulacja rozdzielczości DPI</p><br>
                <p>Adapter
                    Odbiornik USB<br>
                    Kabel USB-A -> USB-C</p><br><br>
                <p>Czarny</p><br>
                <p>128 mm</p><br>
                <p>68 mm</p><br>
                <p>44 mm</p><br>
                <p>63 g</p><br>
                <p>24 miesiące (gwarancja producenta)</p><br>
                <p>RZ01-04630300-R3WL</p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>