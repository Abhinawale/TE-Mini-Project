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
$sql="SELECT * FROM employee WHERE userid='$user_name'";
$result=$mysqli->query($sql);
$em=mysqli_fetch_assoc($result);
$result1=$mysqli->query($sql);
$old_password=$em['password'];

}


   ?>
<html>

<head>

<title>My_Account</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css\change_password.css">

    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>
<body>

<div class="menu">

<ul>
<h1>DTH Services</h1>
<li><a href="home.html"><b>HOME</b></a></li>
<li><a href="#">New Connection List</a></li>
<li><a href="#">Complaint List</a></li>
<li class="right"><a href="logout.php">Logout</a></li>
<li class="right"><a href="#">Contact Admin</a></li>

</ul>

</div>

</div>

<div class="welcome">

<h1>

<?php
while($em=mysqli_fetch_assoc($result1))
{
echo "{$em['name']}<br>";
}
?>

</h1>

</div>


<div class="profile">
<ul>
  <li><a href="store_home.php"> My Account </a></li>
  <li><a href="store_profile.php"> My Profile </a></li>
  <li><a href="">Employee List </a></li>
  <li><a href="customer_list.php">Customer List </a></li>
  <li><a href="">Admin Log </a></li>
  <li><a href="store_changepass.php"> Change Password </a></li>
</ul>

</div>

<div class="window1">
   <div class="pass-change"><?php if($password==$old_password)
{

        $update="UPDATE employee SET password='$new_password' WHERE userid='$user_name'";
        $results=$mysqli->query($update);

        echo"<br>Password changed successfully!!";

}?>
</div>
</div>

</body>

</html>
