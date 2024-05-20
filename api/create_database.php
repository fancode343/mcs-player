<?php
// Database credentials
include("/var/task/user/api/connection.php");

// SQL query to create table
$sql = "CREATE TABLE Users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(20) PRIMARY KEY,
    username VARCHAR(50),
    email VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    wdywtj TEXT,
    phoneCode VARCHAR(15),
    fbprof VARCHAR(255),
    dsnm VARCHAR(255)

)";

// Execute query and check for errors
if ($con->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$con->close();
?>
