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
                    <link rel="stylesheet"  href="css/my_account.css">

     </head>
                <body>
                    <div class="menu">


                            <ul>
                                   <h1>DTH Services</h1>
                                <li><a href="home.html">HOME</a></li>
                                <li><a href="emp_newlist.php">New Connection List</a></li>
                                <li><a href="complaints_list.php">Complaint List</a></li>
                                <li class="right"><a href="logout.php">Logout</a></li>
                                <li class="right"><a href="#">Contact Admin</a></li>

                        </ul>


                  </div>

                  <div class="welcome">

                          <h1>WELCOME Manager
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
                        <li><a href="admin_log.php">Admin Log </a></li>
                        <li><a href="store_changepass.php"> Change Password </a></li>
                        <li><a href="search_cust.php"> Search </a></li>
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
