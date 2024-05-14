<?php
// Generate dynamic contact details
$contact = [
    "name" => "Fardin",
    "email" => "fardinalif@gmail.com",
    "phone" => "01711264331",
    "address" => "329 Elephant Road, Dhaka, Bangladesh"
];

// Set response headers
header("Content-Type: application/json");

// Output JSON data
echo json_encode($contact);

