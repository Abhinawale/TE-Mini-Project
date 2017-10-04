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


$name=$_POST["username"];
$password=$_POST["password"];


$sql1 = "SELECT * FROM customer where mobile='$name' and password='$password'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM employee where userid='$name' and password='$password'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM admin where user_name='$name' and password='$password'";
$result3 = $conn->query($sql3);


if ($result1->num_rows > 0) {
    $emp1=mysqli_fetch_assoc($result1);
    $check=$emp1['typeofstb'];
    if($check==NULL)
    {
        header("Location:hault.php");
    }
    else
    {
    
    session_start();
    
    $_SESSION['username']=$name;
    $sql1 = "SELECT * FROM customer ";
    $result1 = $conn->query($sql1);
    $_SESSION['customer']=$result1->num_rows;
    echo success;
    header("Location: my_account.php");
    }

}

elseif ($result2->num_rows > 0) {
    
    session_start();
    
    $_SESSION['username']=$name;
    $sql2 = "SELECT * FROM employee ";
    $result2 = $conn->query($sql2);
    $_SESSION['employee']=$result2->num_rows;
    echo success;
    header("Location: store_home.php");

}


elseif ($result3->num_rows > 0) {
    
    session_start();
    
    $_SESSION['username']=$name;
    $sql3 = "SELECT * FROM admin";
    $result3 = $conn->query($sql3);
    $_SESSION['admin']=$result3->num_rows;
    echo success;
    header("Location: admin_home.php");

}

else{
$_SESSION['message']='login failed';
   header("Location: login.php");
}
?>