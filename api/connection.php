<?php
// Enable detailed error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbhost = "d0b.h.filess.io:3307";
$dbuser = "ggmc321_expressmap";
$dbpass = "13119e57f3ad90c4efd6b1906fbf150a74b1a388";
$dbname = "ggmc321_expressmap";

try {
    $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($con->connect_error) {
        throw new Exception("Connection failed: " . $con->connect_error);
    }

    echo "Connected successfully";
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
