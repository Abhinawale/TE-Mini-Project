<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
if($_POST['new_password']==$_POST['conf_password']){
$password=$mysqli->real_escape_string($_POST['password']);
$new_password=$mysqli->real_escape_string($_POST['new_password']);
$conf_password=$mysqli->real_escape_string($_POST['conf_password']);
$sql="SELECT * FROM customer WHERE mobile='$user_name'";
$result=$mysqli->query($sql);
$em=mysqli_fetch_assoc($result);

$old_password=$em['password'];



}



?>
<html>

<head>

<title>My_Account</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/change_password.css">

    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>
<body>
<div class="menu">


        <ul>
               <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="packages.html"><b>Packages</b></a></li>


            <li class="right"><a href="logout.php">Logout</a></li>
            <li class="right"><a href="getconnected.php">Get Connected</a></li>
            <li class="right"><a href="custlogin.html">Login</a></li>

            </ul>

  </div>

  </div>
  <div class="welcome">

  <h1>

  <?php


    echo "{$em['firstname']} {$em['lastname']}<br>";

    ?></h1>
    </div>


  <div class="profile">
  <ul>
    <li><a href="my_account.php"> My Account </a></li>
    <li><a href="profile.php"> My Profile </a></li>
    <li><a href="active_plans.php"> Active Plans </a></li>
    <li><a href="balance.php"> Balance </a></li>
    <li><a href="upgrade.html"> Upgrade</a></li>
    <li><a href="change_password.php"> Change Password </a></li>
    <li><a href="wallet.php"> My Wallet </a></li>
  </ul>

  </div>

<div class="window1">
<div class="balance">
Your Balance is:<?php echo"&nbsp;{$em['total']}/-"?>
</div>
</div>
</body>

</html>
