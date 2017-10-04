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
$result1=$mysqli->query($sql);
?>


<html>

<head>

  <title>My_Account</title>
      <meta name-"viewport" content-type="width=device-width inital-scale=1">
      <link rel="stylesheet"  href="css\profile.css">
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
  <h1>AMOUNT TO PAY:<?php
  while($em1=mysqli_fetch_assoc($result1))
{
    echo "{$em1['total']}<br>";
    }

  ?>
  </h1>
  <div class="edit">
        <a href="pay_from_wallet">PAY FROM WALLET</a>
   </div>
</div>

</body>

</html>
