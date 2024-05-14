<?php
// Simulating database data
$events = [
    ["name" => "Concert in the Park", "category" => "music", "description" => "Enjoy live music performances in the park every Saturday."],
    ["name" => "Basketball Tournament", "category" => "sport", "description" => "Participate in our annual basketball tournament and win exciting prizes."],
    ["name" => "Art Exhibition", "category" => "art", "description" => "Explore beautiful artworks by local artists at our art exhibition."],
    ["name" => "Food Festival", "category" => "food", "description" => "Savor delicious cuisines from around the world at our food festival."]
];

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($events);

