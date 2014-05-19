<?php

$db_host = "localhost";
$db_username = "mc2cy";
$db_pass = "elchino419";
$db_name = "test_database";


$db_connection = new mysqli("$db_host", "$db_username", "$db_pass", "$data_name");
if (mysqli_connect_errno()) {
	echo "Connection failed!";
}

?>