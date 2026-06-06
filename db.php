<?php
$host = "localhost";
$user = "event_user";
$password = "eventpass123";
$database = "student_event_system";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
