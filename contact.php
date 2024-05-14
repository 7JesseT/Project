<?php
include "contactconnect.php";

// Get form data
$Name = $_POST['name'];
$Email = $_POST['email'];
$PhoneNumber = $_POST['phone'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];
$Question = $_POST['question'];

// $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user into database
$sql = "INSERT INTO contact ( Name,Email,PhoneNumber,Subject,Message,Question) VALUES ('$name', '$email', '$phone', '$subject','$message','$question' )";

if ($conn->query($sql) === TRUE) {
    // Close MySQL connection
    $conn->close();
    // Redirect to the home page
    header("Location: /Project/contactus.html");
    exit(); // Stop further execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Close MySQL connection
    $conn->close();
}


?>

