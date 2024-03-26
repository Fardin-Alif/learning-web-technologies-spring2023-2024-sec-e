<?php
// Start session to manage user authentication
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "your_username"; // Replace with your MySQL username
    $password = "your_password"; // Replace with your MySQL password
    $dbname = "your_database"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("SELECT id, fullname, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Set parameters and execute
    $email = $_POST['email'];
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if user exists and password is correct
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($_POST['password'], $row['password'])) {
            // Password is correct, set session variables and redirect to dashboard
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $row['email'];
            header("Location: dashboard.php");
            exit();
        }
    }

    // If reached here, authentication failed
    $_SESSION['login_error'] = "Invalid email or password";
    header("Location: login.php");
    exit();

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
