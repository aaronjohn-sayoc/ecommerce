<?php 

$host = '45.32.230.217';
$username = 'njxgywxsgg';
$password = 'weMdGuem7u';
$dbname = 'njxgywxsgg';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>