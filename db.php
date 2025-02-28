<?php
$dbhost = 'localhost';
$user = 'root';
$dbpass = '';
$dbname  = '20222033';

// create database connection
$conn = mysqli_connect($dbhost, $user, $dbpass, $dbname);

// if the DB connection fails, display an error message and exit
if(!$conn){
    die('Could not connect: ' . mysqli_error($conn));
}
// select the database
mysqli_select_db($conn, $dbname);
?>

