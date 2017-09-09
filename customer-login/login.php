<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "abhi";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);
 echo here;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST["username"];

$password=$_POST["password"];

$sql = "SELECT * FROM customer where mobile='$name' and password='$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    $_SESSION["username"]=$name;
    $sql = "SELECT * FROM customer ";
    $result = $conn->query($sql);
    $_SESSION['customer']=$result->num_rows;
    echo success;
    
    
    header("Location: ../regispg2/regispg2.html");

} else {
    $_SESSION['message']='login failed';
   header("Location: re.php");
}
$conn->close();
?>
