<?php
$servername = "localhost"; // Nazwa serwera
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło do bazy danych
$dbname = "techzone"; // Nazwa bazy danych

// Tworzymy połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzamy połączenie
if ($conn->connect_error) {
    die("Połączenie nie powiodło się: " . $conn->connect_error);
}
?>
