<?php
require 'db_connections.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-confirm'];

    if($password != $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.location.href='kidflix.php';</script>";
        exit;
    }

    // Storing plain text password (not recommended)
    $plain_text_password = $password;

    // Prepare SQL and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $plain_text_password);
    
    if ($stmt->execute()) {
        echo "<script>alert('Registered Successfully'); window.location.href='kidflix.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
