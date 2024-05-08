<?php
// Database connection details
$host = "host.docker.internal";
$username = "abc";
$password = "root";
$database = "xhuma";

// Create a new mysqli object
$conn = new mysqli($host, $username, $password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>