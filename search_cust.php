<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM employee WHERE userid='$user_name'";
$result=$conn->query($sql);
?>


<html>
        <head>

                    <title>Store</title>
                    <meta name-"viewport" content-type="width=device-width inital-scale=1">
                    <link rel="stylesheet"  href="css/my_account.css">

     </head>
                <body>
                    <div class="menu">


                            <ul>
                                   <h1>DTH Services</h1>
                                <li><a href="home.html">HOME</a></li>
                                <li><a href="#">New Connection List</a></li>
                                <li><a href="complaints_list.php">Complaints List</a></li>
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


  <div class="windowcustlist">
Enter the Mobile Number of an existing customer to view his details.
  <form action="found_cust.php" method="POST">

<div class="make">
    <input type="text" class="search" name="mobile" placeholder="Enter Mobile Number" autofocus>

    <input type="submit" class="btn-login1" name="submit" value="Search">
</div>
  </form>

  </div>

  </body>

  </html>
