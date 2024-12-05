<?php
session_start();

// Obsługa resetowania hasła
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
        $success_message = "Twoje hasło zostało pomyślnie zaktualizowane.";
    } else {
        $error_message = "Wystąpił błąd podczas zmiany hasła.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetowanie hasła</title>
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
                <h2>Resetowanie hasła</h2>

                <?php if (isset($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <?php if (isset($success_message)): ?>
                    <p style="color: green;"><?php echo $success_message; ?></p>
                <?php endif; ?>

                <form method="POST" action="reset_hasla.php">
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" name="username" id="username" required><br><br>

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
