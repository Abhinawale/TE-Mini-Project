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
$sql="SELECT * FROM customer WHERE mobile='$user_name'";
$result=$conn->query($sql);
$emp1=mysqli_fetch_assoc($result);
$check=$emp1['typeofstb'];
if($check==NULL)
{
    header("Location:hault.php");
}
else{
    header("Location:packages.html");
}
?>
<html>

<head>

<title>My_Account</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/my_account.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    </head>
<body>

<div class="menu">


        <ul>
        <h1>DTH Services</h1>
        <li><a href="home.html">HOME</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="updatepackages.html">Packages</a></li>


        <li class="right"><a href="logout.php">Logout</a></li>
        <li class="right"><a href="getconnected.php">Get Connected</a></li>
        <li class="right"><a href="custlogin.html">Login</a></li>

            </ul>

  </div>


  <div class="welcome">

  <h1>WELCOME



</h1>

</div>





<div class="greet">

<h1>Connection not available</h1><br>
<h1>Our Connection Team will contact you soon</h1>

</div>


</body>

</html>
