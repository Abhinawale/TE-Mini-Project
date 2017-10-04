<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM customer WHERE mobile='$user_name'";
$result=$mysqli->query($sql);

$em3=mysqli_fetch_assoc($result);


    $add=$_POST['amount'];
    $oldamount=$em3['wallet'];
    $new_amount=$add+$oldamount;
    $sql1="UPDATE customer SET wallet='$new_amount' WHERE mobile='$user_name'";
    $result1=$mysqli->query($sql1);
print_r($new_amount);
header("Location: wallet.php");
?>
