<?php
session_start(); // Rozpocznij sesję

// Połączenie z bazą danych
require 'db_connect.php';

// Obsługa formularza rejestracji
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sprawdzamy, czy użytkownik o danej nazwie już istnieje
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jeśli użytkownik o tej nazwie istnieje, wyświetl błąd
    if ($result->num_rows > 0) {
        $error_message = "Nazwa użytkownika jest już zajęta.";
    } else {
        // Haszowanie hasła
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Dodanie użytkownika do bazy danych
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['username'] = $username; // Zalogowanie użytkownika
            header("Location: index.php"); // Przekierowanie na stronę główną
            exit();
        } else {
            $error_message = "Wystąpił problem podczas rejestracji. Spróbuj ponownie.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css"> <!-- Użycie wspólnego pliku CSS -->
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
                <?php if (isset($_SESSION['username'])): ?>
                    <li>Witaj, <?php echo htmlspecialchars($_SESSION['username']); ?></li>
                    <li><a href="logout.php">Wyloguj</a></li>
                <?php else: ?>
                    <li><a href="logowanie.php">Logowanie</a></li>
                    <li><a href="rejestracja.php">Rejestracja</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section id="auth">
            <div class="auth-form">
                <h2>Rejestracja</h2>

                <?php if (isset($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <form method="POST" action="rejestracja.php">
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" name="username" id="username" required><br><br>

                    <label for="password">Hasło:</label>
                    <input type="password" name="password" id="password" required><br><br>

                    <button type="submit">Zarejestruj się</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 TechZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
