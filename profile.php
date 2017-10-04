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
$results=$mysqli->query($sql);
?>

<html>

<head>

<title>My_Account</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/profile.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

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

  <div class="welcome">

    <h1>

    <?php
  while($em=mysqli_fetch_assoc($result))
  {
      echo "{$em['firstname']} {$em['lastname']}<br>";
      }
      ?>

  </h1>

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




<div class="window">

    <h2><center>Personal Details</h2><br>
    <h3> <?php
     while($em=mysqli_fetch_assoc($results))
{
    echo "&nbsp;Name:&nbsp;{$em['firstname']} {$em['lastname']}<br><br>";
    echo "&nbsp;Email-ID:&nbsp;{$em['email']}<br><br>";
    echo "&nbsp;Address:&nbsp;{$em['locality']},{$em['address']},{$em['street']},{$em['landmark']},{$em['city']},{$em['pincode']}<br><br><hr>";
    echo "&nbsp;Type Of Set-Top Box:&nbsp;{$em['typeofstb']}<br><br>";
    echo "&nbsp;Connections:&nbsp;{$em['noofcon']}<br><br>";
    }
    ?>
</h3>

    <div class="edit">
        <a href="edit.php">EDIT PROFILE</a>
   </div>


</div>

</body>

</html>
