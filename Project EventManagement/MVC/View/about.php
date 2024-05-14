<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Simulated database insertion
    $data = json_decode(file_get_contents("php://input"), true);

    // Check if all fields are provided
    if (empty($data['name']) || empty($data['category']) || empty($data['description'])) {
        http_response_code(400);
        echo "All fields are required";
        exit();
    }

    // Insert into database (simulated)
    // Here you would insert the event data into your database
    // Replace this with your actual database logic
    // For demonstration, we'll just echo a success message
    echo "Event created successfully";
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
