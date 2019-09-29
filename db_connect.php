<?php
    $dbServer = "localhost";
    $dbUsername = "root";    // This is the same username as phpMyAdmin
    //$dbPassword = "Beaucleo8!";    // This is the same password as phpMyAdmin
    $dbPassword = "root";
    $dbName = "blog_cms";

    // Create connection
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>