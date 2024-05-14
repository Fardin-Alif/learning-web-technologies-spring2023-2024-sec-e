<?php
// Database connection
$servername = "localhost8080";
$username = "fardin alif"; // 
$password = "123456789"; // 
$dbname = "event_management"; // 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $description = $_POST["description"];

    // Insert data into database
    $sql = "INSERT INTO events (name, category, description) VALUES ('$name', '$category', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

