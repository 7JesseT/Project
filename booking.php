<?php
include "db_connect.php";

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user into database
$sql = "INSERT INTO login1 ( username,email,password) VALUES ('$username', '$email', '$age', '$occupation', '$location')";

if ($conn->query($sql) === TRUE) {
    // Close MySQL connection
    $conn->close();
    // Redirect to the home page
    header("Location: /zion_airlines/index.html");
    exit(); // Stop further execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Close MySQL connection
    $conn->close();
}


?>
