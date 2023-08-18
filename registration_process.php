<?php
// Connect to the database
$mysqli = new mysqli("localhost", "username", "password", "user_registration");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get user input
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$address = $_POST['address'];
$phone = $_POST['phone'];

// Insert user data into the database
$sql = "INSERT INTO users (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";

if ($mysqli->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
