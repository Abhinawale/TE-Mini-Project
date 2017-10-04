
<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM employee where userid='$user_name'";

$result=$mysqli->query($sql);
$results=$mysqli->query($sql);
?>

<html>

<head>

<title>Store</title>
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
<li><a href="#">New Connection List</a></li>
<li><a href="#">Complaint List</a></li>
<li class="right"><a href="logout.php">Logout</a></li>
<li class="right"><a href="#">Contact Admin</a></li>

</ul>

  </div>

  <div class="welcome">

          <h1>
          <?php
                while($em=mysqli_fetch_assoc($result))
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
        <li><a href="search_cust.php"> Search </a></li>
       </ul>
  </div>
<div class="window">

    <h2><center>Personal Details</h2><hr>
    <h3> <?php
     while($em=mysqli_fetch_assoc($results))
{
    echo "&nbsp;Name:&nbsp;{$em['name']}<br><br>";
    echo "&nbsp;User-ID:&nbsp;{$em['userid']}<br><br>";
    echo "&nbsp;Email-ID:&nbsp;{$em['email']}<br><br>";
    echo "&nbsp;Mobile Number:&nbsp;{$em['mobile']}<br><br>";
    }
    ?>
</h3>

    <div class="edit">
        <a href="edit.php">EDIT PROFILE</a>
   </div>


</div>

</body>

</html>
