<?php
session_start();

// Connect to the database
$mysqli = new mysqli("localhost", "username", "password", "user_registration");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user data from the database based on the email
$sql = "SELECT id, name, email, password FROM users WHERE email='$email'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        header("Location: dashboard.php"); // Redirect to the dashboard page
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

$mysqli->close();
?>
