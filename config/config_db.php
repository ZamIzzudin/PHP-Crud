<?php

$databaseHost = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "db_film";

// Create connection
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?>