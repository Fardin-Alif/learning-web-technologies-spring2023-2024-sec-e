<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        .search-container {
            margin-bottom: 20px;
        }
        .event {
            display: none; /* Initially hide all events */
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>EventHub Management System</h1>

        <div class="search-container">
            <form method="get">
                <input type="text" name="search" placeholder="Search events...">
                <select name="category">
                    <option value="">Filter by category</option>
                    <option value="music">Music</option>
                    <option value="sports">Sports</option>
                    <option value="conference">Conference</option>
                    <!-- Add more categories as needed -->
                </select>
                <button type="submit">Search</button>
            </form>
        </div>

        <div id="eventList">
            <?php
            // Define events data (replace this with your actual data retrieval logic)
            $events = array(
                array("name" => "Event 1", "category" => "music"),
                array("name" => "Event 2", "category" => "sports"),
                array("name" => "Event 3", "category" => "conference")
            );

            // Retrieve search query and category filter
            $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
            $categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

            // Loop through events and display those matching the search query and category filter
            foreach ($events as $event) {
                // Check if event matches search query and category filter
                if (
                    (empty($searchQuery) || stripos($event['name'], $searchQuery) !== false) &&
                    (empty($categoryFilter) || $event['category'] == $categoryFilter)
                ) {
                    echo '<div class="event">';
                    echo '<h2>' . htmlspecialchars($event["name"]) . '</h2>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
