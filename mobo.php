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
        <h2>Płyta główna ASUS ROG STRIX X870E-E GAMING WIFI</h2>
        <a href="https://www.x-kom.pl/p/1281730-plyta-glowna-socket-am5-asus-rog-strix-x870e-e-gaming-wifi.html#Specyfikacja"><h2><img class="specfoto" src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/9/pr_2024_9_25_13_36_30_891_00.jpg" border="2px solid black"></h2></a>
        <div class="boxspec">
            <div class="nazwyspec">
                <p>Budowa sekcji zasilania</p><br>
                <p>Chłodzenie sekcji zasilania radiatorem</p><br>
                <p>Kompatybilność z dyskami SSD m.2 z radiatorem</p>
                <p>Rodzaj chłodzenia chipsetu płyty głównej</p>
                <p>Obsługiwane rodziny procesorów</p><br>
                <p>Gniazdo procesora</p><br>
                <p>Chipset</p><br>
                <p>Architektura procesora</p><br><br>
                <p>Typ obsługiwanej pamięci OC</p><br><br>
                <p>Liczba banków pamięci</p><br>
                <p>Maksymalna wielkość pamięci RAM</p>
                <p>Architektura pamięci</p><br>
                <p>Wewnętrzne złącza</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <p>Zewnętrzne złącza</p><br><br><br><br><br><br><br><br><br><br><br><br>
                <p>Obsługa RAID</p><br><br><br><br>
                <p>Obsługa wielu kart graficznych</p><br>
                <p>Obsługa układów graficznych w procesorach</p>
                <p>Układ audio</p><br>
                <p>Łączność bezprzewodowa</p><br>
                <p>Format</p><br>
                <p>Szerokość</p><br>
                <p>Wysokość</p><br>
                <p>Dołączone akcesoria</p><br><br><br>
                <p>Gwarancja</p><br><br>
            </div>
            <div class="parametryspec">
                <p>18+2+2</p><br>
                <p>Tak (W pełni chłodzona sekcja zasilania aluminiowym radiatorem)</p><br>
                <p>Nie</p><br>
                <p>Pasywny</p><br>
                <p>AMD Ryzen™</p><br>
                <p>Socket AM5</p><br>
                <p>X870E</p><br>
                <p>Zen 5 (6 generacja)<br>
                    Zen 4 (5 generacja)</p><br>
                <p>DDR5-8000 MHz<br>
                    DDR5-8400 MHz</p><br>
                <p>4 x DIMM</p><br>
                <p>192 GB</p><br>
                <p>Dual-channel</p><br>
                <p>SATA III (6 Gb/s) - 4 szt.<br>
                    M.2 PCIe NVMe 4.0 x4 - 2 szt.<br>
                    M.2 PCIe NVMe 5.0 x4 - 3 szt.<br>
                    PCIe 5.0 x16 - 1 szt.<br>
                    PCIe 4.0 x16 (tryb x4) - 1 szt.<br>
                    USB 3.2 Gen. 2x2 Typu-C - 1 szt.<br>
                    USB 3.2 Gen. 1 - 2 szt.<br>
                    USB 2.0 - 3 szt.<br>
                    Złącze ARGB 3 pin - 3 szt.<br>
                    Front Panel Audio<br>
                    Złącze wentylatora CPU 4 pin - 2 szt.<br>
                    Złącze wentylatora SYS/CHA - 5 szt.<br>
                    Złącze pompy AIO - 1 szt.<br>
                    Złącze zasilania 8 pin - 2 szt.<br>
                    Złącze zasilania 24 pin - 1 szt.</p><br><br>
                <p>HDMI - 1 szt.
                    RJ45 (LAN) 5 Gbps - 1 szt.<br>
                    USB 4 Type-C - 2 szt.<br>
                    USB 3.2 Gen. 2x2 Type-C - 1 szt.<br>
                    USB 3.2 Gen. 2 - 9 szt.<br>
                    USB 3.2 Gen. 2 Type-C - 1 szt.<br>
                    Audio jack - 2 szt.<br>
                    S/PDIF - 1 szt.<br>
                    Przycisk Clear CMOS - 1 szt.<br>
                    Przycisk USB BIOS Flashback - 1 szt.</p><br><br>
                <p>RAID 0<br>
                    RAID 1<br>
                    RAID 5<br>
                    RAID 10</p><br>
                <p>Nie</p><br>
                <p>Tak</p><br>
                <p>Realtek ALC4080</p><br>
                <p>Wi-Fi 7 (802.11 be)
                Bluetooth 5.4</p><br>
                <p>ATX</p><br>
                <p>244 mm</p><br>
                <p>305 mm</p><br>
                <p>Instrukcja obsługi
                    Kabel SATA - 2 szt.<br>
                    Antena Wi-Fi 2.4/5/6 GHz - 1 szt.</p><br>
                <p>36 miesięcy (gwarancja producenta)</p>
                <p></p><br>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>