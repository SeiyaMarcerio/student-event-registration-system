<?php
include 'db.php';

if (isset($_GET['id'])) {
    $registration_id = $_GET['id'];

    $sql = "DELETE FROM registrations WHERE registration_id = $registration_id";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Registration cancelled successfully.</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}

echo "<a href='my_registrations.php'>Back to My Registrations</a>";
?>
