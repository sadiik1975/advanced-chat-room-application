<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'chatbox';

$con = mysqli_connect($host, $user, $password, $db_name);

if (!$con) {
  echo 'unable to extablish a connection'.mysqli_error($con);
}else{
	echo'we are connected to the database';

}

?>

