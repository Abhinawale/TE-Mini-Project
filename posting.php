<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$notice=$_POST['notice'];
print_r($notice);
$sql = "INSERT INTO notice (notify) VALUES('$notice')" ;
$resulta = $mysqli->query($sql);
header("Location:add_notice.php");
?>