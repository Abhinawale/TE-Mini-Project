<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM employee WHERE userid='$user_name'";
$result=$mysqli->query($sql);

?>

<html>
        <head>

                    <title>Store</title>
                    <meta name-"viewport" content-type="width=device-width inital-scale=1">
                    <link rel="stylesheet" href="css/my_account.css">

     </head>
                <body>
                    <div class="menu">

                            <ul>
                                   <h1>DTH Services</h1>
                                <li><a href="home.html">HOME</a></li>
                                <li><a href="#">New Connection List</a></li>
                                <li><a href="complaints_list.php"><b>Complaints List</b></a></li>
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

        <div class="windowcomplaints">
<?php

$mobile = $_SESSION['mob'];
//echo $mobile;
$sqla = "DELETE FROM feedback where feedback.mobile='$mobile'";
$resulta = $mysqli->query($sqla);
if($resulta===TRUE)
{
echo "Complaint Record has been deleted from database!";
echo "<form action='complaints_list.php'>";
echo "<input type='submit' value='OK' name='submit' class='btn-login'>";
echo "</form>";
}
?>


</div>
</body>
</html>
