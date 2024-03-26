<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
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
        .event-info {
            margin-top: 20px;
        }
        .event-info-box {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .event-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Event Details</h1>
        <div class="event-info">
            <div class="event-info-box">
                <h2>Event Name</h2>
                <p id="event-name"><?php echo isset($eventName) ? htmlspecialchars($eventName) : 'Event Name Placeholder'; ?></p>
            </div>

            <div class="event-info-box">
                <h2>Date and Time</h2>
                <p id="event-date-time"><?php echo isset($eventDateTime) ? htmlspecialchars($eventDateTime) : 'Date and Time Placeholder'; ?></p>
            </div>

            <div class="event-info-box">
                <h2>Venue</h2>
                <p id="event-venue"><?php echo isset($eventVenue) ? htmlspecialchars($eventVenue) : 'Venue Placeholder'; ?></p>
            </div>

            <div class="event-info-box">
                <h2>Description</h2>
                <p id="event-description"><?php echo isset($eventDescription) ? htmlspecialchars($eventDescription) : 'Description Placeholder'; ?></p>
            </div>
        </div>
    </div>
</body>
</html>

