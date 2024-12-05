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
            <h1><img src="TechZone.png" alt="Logo"></h1>
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
    <section id="podzespoly">
    <div class="peryferia">
        <h2>Podzespoły dla graczy</h2>
    </div>
    <div class="products">
        <div class="product">
            <img src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2023/4/pr_2023_4_11_12_16_14_829_07.jpg" alt="Karta graficzna">
            <h3>Karta graficzna Gigabyte RTX 4070 OC 12GB</h3>
            <p>Wydajność na najwyższym poziomie.</p>
            <a href="graph.php">Pełna specyfikacja</a>
        </div>
                <div class="product">
                    <img class="procekimg" src="procek.png" alt="Procesor">
                    <h3>Procesor AMD Ryzen 9 9950X</h3>
                    <p>Moc dla profesjonalnych graczy.</p>
                    <a href="proc.php"  >Pełna specyfikacja</a>
                </div>
                <div class="product">
                   <img src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/9/pr_2024_9_25_13_36_30_891_00.jpg" alt="Płyta główna">
                    <h3>Płyta główna ASUS ROG STRIX X870E-E GAMING WIFI</h3>
                    <p>Stabilność i niezawodność.</p>
                    <a href="mobo.php"  >Pełna specyfikacja</a>
                </div>
            </div>
        </section>

        <section id="akcesoria">
    <div class="peryferia">
        <h2>Akcesoria dla graczy</h2>
    </div>
    <div class="products">
        <div class="product">
            <img src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/3/pr_2024_3_18_7_25_56_723_00.jpg" alt="Mysz gamingowa">
            <h3>Mysz Razer DeathAdder V3 Pro</h3>
            <p>Precyzja i wygoda.</p>
            <a href="mouse.php">Pełna specyfikacja</a>
        </div>
                <div class="product">
                    <img src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2023/9/pr_2023_9_1_9_45_9_246_00.jpg" alt="Klawiatura mechaniczna">
                    <h3>Klawiatura Logitech G PRO X TKL Lightspeed Tactile</h3>
                    <p>Szybkość i niezawodność.</p>
                    <a href="keyb.php"  >Pełna specyfikacja</a>
                </div>
                <div class="product">
                   <img src="https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2024/5/pr_2024_5_21_12_35_8_568_00.jpg" alt="Podkładka pod mysz">
                    <h3>Podkładka SteelSeries QcK Prism Cloth 5XL</h3>
                    <p>Idealna powierzchnia do gry.</p>
                    <a href="mousepad.php"  >Pełna specyfikacja</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
