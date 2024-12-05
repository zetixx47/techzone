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
        <h2>Klawiatura Logitech G PRO X TKL Lightspeed Tactile</h2>
        <a href="https://www.x-kom.pl/p/1172772-klawiatura-bezprzewodowa-logitech-g-pro-x-tkl-lightspeed-tactile-czarny.html#Specyfikacja"><h2><img class="specfoto" src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2023/9/pr_2023_9_1_9_45_9_246_00.jpg" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Rodzaj przełączników</p><br>
                <p>Typ</p><br>
                <p>Interfejs</p><br>
                <p>Klawisze numeryczne</p><br>
                <p>Klawisze multimedialne / funkcyjne</p><br>
                <p>Obsługa makr</p><br>
                <p>Podświetlenie klawiszy</p><br>
                <p>Kolor podświetlenia klawiszy</p><br>
                <p>Rodzaj podświetlenia</p><br><br><br><br><br><br>
                <p>Złącza</p><br>
                <p>Podpórka pod nadgarstki</p><br>
                <p>Kolor</p><br>
                <p>Długość przewodu</p><br><br>
                <p>Czas pracy na baterii</p><br><br>
                <p>Obsługiwane systemy</p><br>
                <p>Obudowa</p><br>
                <p>Dodatkowe informacje</p><br><br><br>
                <p>Dołączone akcesoria</p><br><br><br>
                <p>Długość</p><br>
                <p>Szerokość</p><br>
                <p>Wysokość</p><br>
                <p>Gwarancja</p><br><br>
                <p>Kod producenta</p><br>
            </div>
            <div class="parametryspec">
                <p>Mechaniczne - GX Brown</p><br>
                <p>Dla graczy
                TKL (tenkeyless)</p><br>
                <p>USB
2,4 GHz
Bluetooth</p><br>
                <p>Nie</p><br>
                <p>Tak</p><br>
                <p>Tak</p><br>
                <p>Tak</p><br>
                <p>Wielokolorowe - RGB</p><br>
                <p>Punktowe - każdy klawisz w innym kolorze<br>
Strefowe - każda strefa w innym kolorze<br>
Jednostrefowe - wszystkie klawisze w tym samym kolorze</p><br>
                <p>Nie posiada</p><br>
                <p>Nie</p><br>
                <p>Czarny</p><br>
                <p>1,8 m</p><br><br>
                <p>Do 50 godzin</p><br><br>
                <p>Windows</p><br>
                <p>Standardowa</p><br>
                <p>Odłączany kabel USB
Wielofunkcyjne pokrętło
Dynamiczne efekty świetlne RGB</p><br>
                <p>Nanoodbiornik<br>
Kabel USB-A -> USB-C<br>
Etui</p><br>
                <p>
                352 mm</p><br>
                <p>150 mm</p><br>
                <p>34 mm</p><br>
                <p>24 miesiące (gwarancja producenta)</p><br>
                <p>920-012136</p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>