<?php
    $conn = mysqli_connect("localhost", "username", "password", "database_name");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Corrected the variable name from $con to $conn
    // Removed "or die(mysqli_error($conn));" as it's not necessary after checking connection above
    
    if (!isset($_SESSION)) {
        session_start();
    }
?>
