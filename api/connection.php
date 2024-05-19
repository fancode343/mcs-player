<?php
// Enable detailed error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbhost = "gran-89a5cecf05.onlitegix.com";
$dbuser = "ggmc";
$dbpass = "thelegend";
$dbname = "gran";

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
