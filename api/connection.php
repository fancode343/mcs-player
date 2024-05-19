<?php

$dbhost = "gran-89a5cecf05.onlitegix.com";
$dbuser = "ggmc";
$dbpass = "thelegend";
$dbname = "gran";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
