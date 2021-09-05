<?php 
$host = "myHost";
$port = "0000";
$dbname = "myDB";
$user = "myUser";
$password = "myPassword"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);     
?>