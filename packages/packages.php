<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_POST['package'] == 1) {
    $package = 1;
}
if ($_POST['package'] == 2) {
   $package = 2;
}
if ($_POST['package'] == 3) {
   $package = 3;
}
if ($_POST['package'] == 4) {
    $package = 4;
 }
 


 
if ($_POST['addon'] == 1) {
    $addon = 1;
}
if ($_POST['addon'] == 2) {
   $addon = 2;
}
if ($_POST['addon'] == 3) {
   $addon = 3;
}
if ($_POST['addon'] == 4) {
    $addon = 4;
 }
 if ($_POST['addon'] == 5) {
    $addon = 5;
 }
 if ($_POST['addon'] == 6) {
     $addon = 6;
  }

  $updatesql1 = "UPDATE customer SET payment=(SELECT SUM(basic) from basic where mobileno=123)+(SELECT SUM(addons) from addons WHERE mobileno=123)";

  $updateresult1 = $conn->query($updatesql1);





 ?>