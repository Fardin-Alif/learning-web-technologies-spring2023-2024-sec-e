<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost:8080";
    $username = "fardin alif"; 
    $password = "12345678"; 
    $dbname = "event_management"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $sql = "UPDATE events SET name='$name', category='$category', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Event updated successfully";
    } else {
        echo "Error updating event: " . $conn->error;
    }

    $conn->close();
}
?>
