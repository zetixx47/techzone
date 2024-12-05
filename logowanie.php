<?php
session_start();

// Sprawdzanie, czy użytkownik jest już zalogowany
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Obsługa logowania
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Połączenie z bazą danych
    require 'db_connect.php'; // Załaduj plik db_connect.php

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sprawdzanie, czy użytkownik istnieje w bazie danych
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Sprawdzanie poprawności hasła
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Nieprawidłowe hasło.";
        }
    } else {
        $error_message = "Użytkownik o tej nazwie nie istnieje.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1><a href="index.php"><img src="TechZone.png" alt="Logo"></a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="rejestracja.php">Rejestracja</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="auth">
            <div class="auth-form">
                <h2>Logowanie</h2>

                <?php if (isset($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <form method="POST" action="logowanie.php">
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" name="username" id="username" required><br><br>

                    <label for="password">Hasło:</label>
                    <input type="password" name="password" id="password" required><br><br>

                    <button type="submit">Zaloguj się</button>
                </form>

                <!-- Link do strony resetowania hasła -->
                <p><a href="reset_hasla.php">Zapomniałeś hasła?</a></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
