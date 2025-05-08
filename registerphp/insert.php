<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password']; // You can add password_hash($password, PASSWORD_DEFAULT) here

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Registration successful!</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
