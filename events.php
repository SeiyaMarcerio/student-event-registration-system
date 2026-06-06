<?php
include 'db.php';

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

echo "<h1>Upcoming Events</h1>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<div>";

    echo "<h2>" . $row['title'] . "</h2>";

    echo "<p>" . $row['description'] . "</p>";

    echo "<p>Date: " . $row['event_date'] . "</p>";

    echo "<p>Location: " . $row['location'] . "</p>";

    echo "<p>Capacity: " . $row['capacity'] . "</p>";

    echo "<hr>";

    echo "</div>";
}

echo "<a href='register.php'>Register Here</a>";
?>
