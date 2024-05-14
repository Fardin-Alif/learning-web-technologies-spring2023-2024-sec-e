<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Define variables and initialize with empty values
    $name = $email = $password = $confirmPassword = "";
    $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";

    // Validate form fields
    // Your validation code goes here
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!ctype_alpha(str_replace(' ', '', $name))) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Add your custom password validation logic here if needed
    }

    if (empty($_POST["confirm-password"])) {
        $confirmPasswordErr = "Please confirm password";
    } else {
        $confirmPassword = test_input($_POST["confirm-password"]);
        if ($confirmPassword !== $password) {
            $confirmPasswordErr = "Passwords do not match";
        }
    }

    // If all fields are valid, process the data
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        // Process the submitted data (you can add your processing logic here)
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        // Note: For security reasons, never echo or display passwords in any form

        // Redirect or display success message after processing
    }

    // Function to sanitize form input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>

