<?php

$dbhost = "Dsbot-database-465e21d6d5.onlitegix.com";
$dbuser = "GGMC";
$dbpass = "thelegend";
$dbname = "";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
