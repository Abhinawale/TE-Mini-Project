<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';
$user_name=$_SESSION['username'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['installation'] == 1) {
    $installation = 1;
}
if ($_POST['installation'] == 2) {
   $installation = 2;
}
if ($_POST['installation'] == 3) {
   $installation = 3;
}



 if ($_POST['typeofstb'] == 1) {
    $typeofstb = 1;
 }
 if ($_POST['typeofstb'] == 2) {
    $typeofstb = 2;
 }
 if ($_POST['typeofstb'] == 3) {
    $typeofstb = 3;
 }



 if ($_POST['noofcon'] == 1) {
     $noofcon = 1;
 }
 if ($_POST['noofcon'] == 2) {
    $noofcon = 2;
 }
 if ($_POST['noofcon'] == 3) {
     $noofcon = 3;
 }



 $new_cust1="INSERT INTO new_customer (mobile, firstname, lastname, city) SELECT customer.mobile, customer.firstname, customer.lastname, customer.city FROM customer where customer.mobile=$user_name";
 $new_cust1result1 = $conn->query($new_cust1);
$updatesql1 = "UPDATE new_customer SET typeofstb = '$typeofstb' WHERE mobile = '$user_name'";
$updatesql2 = "UPDATE new_customer SET noofcon = '$noofcon' WHERE mobile = '$user_name'";
$updatesql = "UPDATE new_customer SET installation = '$installation' WHERE mobile = '$user_name'";

$updateresult1 = $conn->query($updatesql1);
$updateresult2 = $conn->query($updatesql2);
$updateresult = $conn->query($updatesql);

header("Location:wait.php")

?>