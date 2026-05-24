<?php
echo "<h1>Event Registration</h1>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];

    echo "<p>Thank you for registering, $name!</p>";
}
?>

<form method="POST">
    Name: <input type="text" name="name">
    <button type="submit">Register</button>
</form>