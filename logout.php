<?php
session_start(); // Rozpocznij sesję
session_unset(); // Usuń zmienne sesji
session_destroy(); // Zniszcz sesję
header("Location: index.php"); // Przekieruj na stronę główną
exit();
