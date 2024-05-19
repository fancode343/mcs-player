<?php

$dbhost = "sql.freedb.tech";
$dbuser = "freedb_Gran5";
$dbpass = "7#EKrSExgayC7@h";
$dbname = "freedb_LoginGuormit";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
