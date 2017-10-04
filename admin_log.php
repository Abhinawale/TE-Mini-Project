
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
$sql1="SELECT * FROM notice";
$result1=$mysqli->query($sql1);
?>


<html>
        <head>

                    <title>Store</title>
                    <meta name-"viewport" content-type="width=device-width inital-scale=1">
                    <link rel="stylesheet"  href="css/my_account.css">
                    <link rel="stylesheet"  href="css/notify1.css">

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

                          <h1>Manager
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


                  
                  <div class="chatbox">
                          <div class ="chatlogs">

                          <?php
                          while($em1=mysqli_fetch_assoc($result1))
                          {
                            
                          echo "<div class='chat self'>";
                          echo "<div class='user-photo'>";
                          echo "</div>";
                              echo"<p class='chat-message'>{$em1['time']}<br><br>{$em1['notify']}</p>";
                            echo"</div>";
                            
                          }
                          ?>
                            </div>
                            </div>

             </body>
</html>
