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
        <h2>Karta graficzna Gigabyte RTX 4070 OC 12GB</h2>
        <a href="https://www.x-kom.pl/p/1135382-karta-graficzna-nvidia-gigabyte-geforce-rtx-4070-windforce-oc-12gb-gddr6x.html"><h2><img class="specfoto" src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2023/4/pr_2023_4_11_12_16_14_829_07.jpg" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Seria karty graficznej</p><br>
                <p>Obsługa Ray tracingu</p><br>
                <p>Technika upscalingu</p><br>
                <p>Układ graficzny</p><br>
                <p>Rodzaj złącza</p><br>
                <p>Pamięć</p><br>
                <p>Rodzaj pamięci</p><br>
                <p>Szyna pamięci</p><br>
                <p>Efektywne taktowanie pamięci</p><br>
                <p>Typ chłodzenia</p><br>
                <p>Liczba wentylatorów</p><br>
                <p>Podświetlenie</p><br>
                <p>Rodzaje wyjść</p><br><br>
                <p>Obsługiwane biblioteki</p><br><br>
                <p>Złącze zasilania</p><br>
                <p>Rekomendowana moc zasilacza</p><br>
                <p>Pobór mocy</p><br>
                <p>Długość</p><br>
                <p>Szerokość</p><br>
                <p>Wysokość</p><br>
                <p>Format PCB</p><br>
                <p>Liczba zajmowanych slotów</p><br>
                <p>Dołączone akcesoria</p><br>
                <p>Gwarancja</p><br><br>
                <p>Kod producenta</p><br>
            </div>
            <div class="parametryspec">
                <p>GeForce RTX z serii 40</p><br>
                <p>Tak</p><br>
                <p>Nvidia DLSS 3.5</p><br>
                <p>GeForce RTX 4070</p><br>
                <p>PCIe 4.0 x16</p><br>
                <p>12 GB</p><br>
                <p>GDDR6X</p><br>
                <p>192 bit</p><br>
                <p>21000 MHz</p><br>
                <p>Aktywne</p><br>
                <p>3</p><br>
                <p>Nie</p><br>
                <p>HDMI 2.1a - 1 szt.<br>
                DisplayPort 1.4a - 3 szt.</p><br>
                <p>DirectX 12 Ultimate<br>
                OpenGL 4.6</p><br>
                <p>8 pin - 1 szt.</p><br>
                <p>650 W</p><br>
                <p>215 W</p><br>
                <p>261 mm</p><br>
                <p>126 mm</p><br>
                <p>50 mm</p><br>
                <p>ATX</p><br>
                <p>2.5 slot</p><br>
                <p>Instrukcja obsługi</p><br>
                <p>36 miesięcy (gwarancja<br> producenta)</p><br>
                <p>
                GV-N4070WF3OC-12GD</p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>