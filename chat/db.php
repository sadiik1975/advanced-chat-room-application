<?php 
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'chat';

$con = mysqli_connect($host, $user, $password, $db_name);

if (!$con) {
	print 'unable to extablish a connection';
}


 ?>