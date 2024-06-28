<?php
$conn_server = 'localhost';
$conn_username = 'root';
$conn_password = '';
$conn_database = 'educom';

$conn=mysqli_connect($conn_server,$conn_username,$conn_password,$conn_database);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

date_default_timezone_set("Asia/Kolkata");
$currentDate=date('Y-m-d');
$currentDateTime=date('Y-m-d H:i:s');
?>