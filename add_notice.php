<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM notice";
$result=$mysqli->query($sql);
$result1=$mysqli->query($sql);
?>


<html>
        <head>

                    <title>Store</title>
                    <meta name-"viewport" content-type="width=device-width inital-scale=1">
                    <link rel="stylesheet"  href="css/my_account.css">
                    <link rel="stylesheet"  href="css/notify.css">

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

                          <h1>Admin
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
                        <li><a href=""> My Account </a></li>
                        <li><a href=""> Store </a></li>
                        <li><a href="add_notice.php">Notify </a></li>
                        <li><a href="">Customer List </a></li>
                        <li><a href="">Admin Log </a></li>
                        <li><a href=""> Change Password </a></li>
                        <li><a href=""> Search </a></li>
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
                            <form action="posting.php" method="post">
                            <div class="chat-form">
                                <textarea name="notice" placeholder="Type here-"></textarea>
                                <input type="submit" name="submit" value="SEND" class="button">
                            </div>
                            </form>
                            </div>
                  

                  


             </body>
</html>
