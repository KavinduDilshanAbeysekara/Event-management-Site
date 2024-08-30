<?php
require './../pages/connect.php';//connect to the database using the external file

// Add new record
if (isset($_POST['add'])) {//Check if the form is submitted(via the "add" button)
    $eventName = $_POST['eventName'];//Get the event name from the form
    $eventType = $_POST['eventType'];//Get the event type from the form
    $eventPrice = $_POST['eventPrice'];//Get the event price from the form
    $NoOfParticipants = $_POST['NoOfParticipants'];//Get the number of participantsfrom the form

    //Sanitize the output data to Prevent SQL Injection
    $eventName = $conn->real_escape_string($eventName); 
    $eventType = $conn->real_escape_string($eventType);
    $eventPrice = $conn->real_escape_string($eventPrice);
    $NoOfParticipants = $conn->real_escape_string($NoOfParticipants);

    //SQL query to insert the new event into the database
    $sql = "INSERT INTO events (eventName, eventType, eventPrice, NoOfParticipants) VALUES ('$eventName', '$eventType', '$eventPrice', '$NoOfParticipants')";
    
    //Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        //If successful, display an alert and redirect to the 'event.php' page
        echo "<script>alert('Event added successfully'); window.location.href='event.php';</script>";
    } else {
        //If there was an error, display an alert
        echo "<script>alert('Error adding event')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- Define the character encoding-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensure proper scaling on mobile devices -->
    <link rel="stylesheet" href="../css/admin.css"> <!-- Link to the external CSS file for styling -->
    <title>Add Event</title> <!-- Set the title of the page -->
</head>
<body>
    <h2>Event Management</h2> <!-- Main heading of the page -->

    <!-- Add Event Form -->
    <div id="add-form"> <!-- Container for the form -->
        <h3>Add New Event</h3> <!-- Subheading for the form -->
        <form method="post"> <!-- Form for adding a new event -->

            <!-- Event Name selection dropdown -->
            <label for="eventName">Event Name:</label>
            <select id="eventName" name="eventName" required>
            <option value="" disabled selected>Select Event Name</option> <!-- Default option -->
            <option value="Wedding">Wedding</option>
            <option value="Birthday Parties" >Birthday Parties</option>
            <option value="Met Gala Dinner" >Met Gala Dinner</option>
            <option value="Funeral" >Funeral</option>
            <option value="Product Launch" >Product Launch</option>
            <option value="Conference">Conference</option>
            <option value="Workshop">Workshop</option>
            <option value="Musical Concert">Musical Concert</option>
            <!-- Add more predefined event names as needed -->
            </select>

            <!-- Event Type selection dropdown -->
            <label for="eventType">Event Type:</label>
            <select id="eventType" name="eventType" required>
                <option value="" disabled selected>Select Event Type</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <!-- Add more predefined event types as needed -->
            </select>

            <!-- Input field for Event Price -->
            <label for="eventPrice">Event Price:</label>
            <input type="number" id="eventPrice" name="eventPrice" required>

            <label for="NoOfParticipants">Number of Participants:</label>
            <input type="number" id="NoOfParticipants" name="NoOfParticipants" required>

            <input type="submit" name="add" value="Add Event">
        </form>
    </div>
</body>
</html>
