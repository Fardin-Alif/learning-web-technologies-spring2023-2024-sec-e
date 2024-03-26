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
            // Database connection parameters
            $servername = "localhost";
            $username = "your_username"; 
            $password = "your_password"; 
            $dbname = "your_database"; 
//
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve search query and category filter
            $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
            $categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

            // Construct SQL query based on search query and category filter
            $sql = "SELECT name, category FROM events WHERE 1=1"; // Base query
            if (!empty($searchQuery)) {
                $sql .= " AND name LIKE '%$searchQuery%'";
            }
            if (!empty($categoryFilter)) {
                $sql .= " AND category = '$categoryFilter'";
            }

            // Execute SQL query
            $result = $conn->query($sql);

            // Display events
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="event">';
                    echo '<h2>' . htmlspecialchars($row["name"]) . '</h2>';
                    echo '</div>';
                }
            } else {
                echo "No events found";
            }

            // Close database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
