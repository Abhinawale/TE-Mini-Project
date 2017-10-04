<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);
 echo here;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$emp_id=$_POST["emp_id"];

$password=$_POST["password"];

$sql = "SELECT * FROM emplog where emp_id='$emp_id' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    
    $_SESSION["emp_id"]=$emp_id;
    $sql = "SELECT * FROM emplog ";
    $result= $conn->query($sql);
    $_SESSION['emplog'] = $result->num_rows;
    echo success;
    header("Location: emp_account.php");

} else {
    $_SESSION['message']='login failed';
   header("Location: emp_login.php");
}
$conn->close();
?>
