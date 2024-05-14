<?php
if (isset($_GET['id'])) {
    // Database connection
    $servername = "localhost:8080";
    $username = "fardin alif"; // 
    $password = "123456789"; // 
    $dbname = "event_management"; // 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM events WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $category = $row['category'];
        $description = $row['description'];
    } else {
        echo "Event not found!";
    }

    $conn->close();
} else {
    echo "Event ID not provided!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2 style="color: #4CAF50;">Update Event</h2>
    <form action="update_event_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name" style="color: #4CAF50;">Event Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>

        <label for="category" style="color: #2196F3;">Category:</label><br>
        <input type="text" id="category" name="category" value="<?php echo $category; ?>"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $description; ?></textarea><br>

        <input type="submit" value="Update" style="background-color: #4CAF50;">
    </form>
</div>

</body>
</html>
