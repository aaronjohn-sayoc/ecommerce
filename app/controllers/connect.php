<?php 

$host = 'db4free.net';
$username = 'qstore123';
$password = 'qstore123';
$dbname = 'qstore_dbdb';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>