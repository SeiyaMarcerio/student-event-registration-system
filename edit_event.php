<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $event_id = $_POST["event_id"];
    $capacity = $_POST["capacity"];

    $sql = "UPDATE events
            SET capacity = $capacity
            WHERE event_id = $event_id";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Event updated successfully!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}

$result = mysqli_query($conn, "SELECT * FROM events");

echo "<h1>Edit Event Capacity</h1>";

echo "<form method='POST'>";

echo "<select name='event_id'>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<option value='" . $row['event_id'] . "'>";

    echo $row['title'];

    echo "</option>";
}

echo "</select><br><br>";

echo "New Capacity: ";
echo "<input type='number' name='capacity' required>";

echo "<br><br>";

echo "<button type='submit'>Update Event</button>";

echo "</form>";
?>
