<?php

$servername = "localhost";
$username = "root";
$password = "abhi";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
 echo here;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST["username"];

$password=$_POST["password"];

$sql = "SELECT * FROM users where username='$name' and password='$password'";//itha name use karyla hava na??? ho
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    
    $_SESSION['username']=$name;
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    $_SESSION['users']=$result->num_rows;
    echo success;
    //header("Location: one.php");

} else {
    $_SESSION['message']='login failed';
   header("Location: re.php");
}
$conn->close();
?>
