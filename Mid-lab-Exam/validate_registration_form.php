<?php
// Function to validate name
function validateName($name) {
    // Check if empty
    if(empty($name)) {
        return "Name cannot be empty.";
    }

    // Check if contains at least two words
    $words = explode(" ", $name);
    if(count($words) < 2) {
        return "Name must contain at least two words.";
    }

    // Check if contains only allowed characters
    $allowedCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
    for($i = 0; $i < strlen($name); $i++) {
        if(strpos($allowedCharacters, $name[$i]) === false) {
            return "Name can only contain letters, dots, or dashes.";
        }
    }

    return ""; // No validation errors
}

// Function to validate email
function validateEmail($email) {
    // Check if empty
    if(empty($email)) {
        return "Email cannot be empty.";
    }

    // Check if valid email format
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    return ""; // No validation errors
}

// Function to validate gender
function validateGender($gender) {
    // Check if at least one option is selected
    if(empty($gender)) {
        return "Please select a gender.";
    }

    return ""; // No validation errors
}

// Function to validate date of birth
function validateDOB($day, $month, $year) {
    // Check if any field is empty
    if(empty($day) || empty($month) || empty($year)) {
        return "Date of birth cannot be empty.";
    }

    // Check if valid date components
    if(!checkdate($month, $day, $year)) {
        return "Invalid date of birth.";
    }

    return ""; // No validation errors
}

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $nameError = validateName($_POST["first_name"]);
    $emailError = validateEmail($_POST["email"]);
    $genderError = validateGender($_POST["gender"]);
    $dobError = validateDOB($_POST["dob_day"], $_POST["dob_month"], $_POST["dob_year"]);

    // If no errors, form is valid
    if(empty($nameError) && empty($emailError) && empty($genderError) && empty($dobError)) {
        echo "Form is valid. Proceed with registration.";
        // Additional processing or database insertion can be done here
    } else {
        // Print validation errors
        echo "Validation errors:<br>";
        echo $nameError . "<br>";
        echo $emailError . "<br>";
        echo $genderError . "<br>";
        echo $dobError . "<br>";
    }
}
?>
