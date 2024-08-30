<?php
require './../pages/connect.php'; //Connect to the database using an external file

// Fetch records from the 'event' table
$sql = "SELECT * FROM events";
$result = $conn->query($sql);//Execute the query and store the result

// Delete record
if (isset($_GET['delete'])) { //Cjeck if a delete request has been made via the 'delete' query parameter
    $id = $_GET['delete']; // Get the event ID from the URL
    $id = intval($id); // Prevent SQL Injection

    //SQL query to delete the record with the specified ID
    $sql = "DELETE FROM events WHERE eventId='$id'";

    //Execute the delete query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href='event.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ensure proper scaling on mobile devices -->
    <link rel="stylesheet" href="../css/admin.css"> <!-- Link to the external CSS file for styling -->
    <title>All Events</title> <!-- Set the title of the page -->
</head>
<body>
    <!-- Display Events -->
    <div class="flex"> <!-- Container for the header and add event link -->
        <h3>Event List</h3>
        <a href="./addevent.php">Add new event</a> <!-- Link to add a new event -->
    </div>

    <!-- Table for displaying event records -->
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Type</th>
                <th>Event Price</th>
                <th>No. of Participants</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) { // Check if there are any records in the result
                while ($row = $result->fetch_assoc()) { // Loop through each record
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['eventName']) . "</td>"; //Display the event name
                    echo "<td>" . htmlspecialchars($row['eventType']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['eventPrice']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['NoOfParticipants']) . "</td>";
                    echo "<td>";
                    //Link to the edit page for the current event
                    echo "<a class='action-btn' href='updateEvent.php?id=" . htmlspecialchars($row['eventId']) . "'>Edit</a>";
                    //Link to delete the current event
                    echo "<a href='event.php?delete=" . htmlspecialchars($row['eventId']) . "' class='action-btn'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                // Display a message if no events are found
                echo "<tr><td colspan='5'>No events found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
