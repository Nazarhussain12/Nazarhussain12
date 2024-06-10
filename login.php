<?php
session_start(); // Start the session at the beginning of the script
require 'db_connections.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Prepare SQL
    if ($stmt = $conn->prepare("SELECT id, username FROM users WHERE email = ?")) {
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                // If the email exists in the users table
                $user = $result->fetch_assoc();
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $email; // Store the email in session
                $_SESSION["id"] = $user['id'];
                $_SESSION["username"] = $user['username'];

                // Redirect to Home.php
                header("Location: Home.php");
                exit;
            } else {
                // If the email does not exist in the users table
                echo "<script>alert('No user found with that email.'); window.location.href='kidflix.php';</script>";
                exit;
            }
        } else {
            echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
    $conn->close();
}
?>
