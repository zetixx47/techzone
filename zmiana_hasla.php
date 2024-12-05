<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db_connect.php'; // Załaduj plik db_connect.php

    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    // Haszowanie nowego hasła
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Zmiana hasła w bazie danych
    $sql = "UPDATE users SET password = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashed_password, $username);

    if ($stmt->execute()) {
        echo "Twoje hasło zostało pomyślnie zaktualizowane.";
    } else {
        echo "Wystąpił błąd podczas zmiany hasła.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmiana hasła</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1><a href="index.php"><img src="TechZone.png" alt="Logo"></a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="logowanie.php">Logowanie</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="auth">
            <div class="auth-form">
                <h2>Zmiana hasła</h2>

                <form method="POST" action="zmiana_hasla.php">
                    <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">

                    <label for="new_password">Nowe hasło:</label>
                    <input type="password" name="new_password" id="new_password" required><br><br>

                    <button type="submit">Zmień hasło</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
