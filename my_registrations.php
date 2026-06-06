<?php
include 'db.php';

$sql = "
SELECT 
    registrations.registration_id,
    users.name,
    users.student_id,
    events.title,
    registrations.registration_date,
    registrations.status
FROM registrations
JOIN users ON registrations.user_id = users.user_id
JOIN events ON registrations.event_id = events.event_id
";

$result = mysqli_query($conn, $sql);

echo "<h1>My Registrations</h1>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>Student: " . $row['name'] . "</p>";
    echo "<p>Student ID: " . $row['student_id'] . "</p>";
    echo "<p>Date Registered: " . $row['registration_date'] . "</p>";
    echo "<p>Status: " . $row['status'] . "</p>";
    echo "<a href='cancel_registration.php?id=" . $row['registration_id'] . "'>Cancel Registration</a>";
    echo "<hr>";
    echo "</div>";
}

echo "<a href='events.php'>Back to Events</a>";
?>
