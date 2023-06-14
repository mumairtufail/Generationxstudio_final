<?php

$databaseHost = 'localhost';
$databaseName = 'studioadmin';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("connection failed!" . msqli_connect_error()); 
 
?>
