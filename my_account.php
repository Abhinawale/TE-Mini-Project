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
        <li><a href="packages.html">Packages</a></li>


        <li class="right"><a href="logout.php">Logout</a></li>
        <li class="right"><a href="getconnected.php">Get Connected</a></li>
        <li class="right"><a href="custlogin.html">Login</a></li>

            </ul>

  </div>


  <div class="welcome">

  <h1>WELCOME

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


<div class="greet">

<?php
$morning = "<br><br>&nbsp;&nbsp;&nbsp;Have a Nice day!&nbsp;&nbsp;&nbsp;<br><br><br>";
$afternoon = "<br><br>&nbsp;&nbsp;&nbsp;Good Afternoon!&nbsp;&nbsp;&nbsp;<br><br><br>";
$evening = "<br><br>&nbsp;&nbsp;&nbsp;Wish you a pleasant evening!&nbsp;&nbsp;&nbsp;<br><br><br>";
$current_time = date(G);
if($current_time>=6 && $current_time<12)
{
  echo $morning;
}
elseif($current_time>=12 && $current_time <16)
{
  echo $afternoon;
}
elseif($current_time>=16 && $current_time<20)
{
  echo $evening;
}
else
{
  echo "<br><br>&nbsp;&nbsp;&nbsp;Keep Smiling and Stay Cheerful!&nbsp;&nbsp;&nbsp;<br><br><br>";

}
?>
</div>


</body>

</html>
