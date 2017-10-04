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
if($user_name[0]=='P' && $user_name[1]=='U')
{
  $sqla = "SELECT * FROM new_customer where city='pune'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  //$resultc = $conn->query($sqla);
}

else if($user_name[0]=='M' && $user_name[1]=='U')
{
  $sqla = "SELECT * FROM new_customer where city='mumbai'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  //$resultc = $conn->query($sqla);
}
else if($user_name[0]=='N' && $user_name[3]=='P')
{
  $sqla = "SELECT * FROM new_customer where city='nagpur' ";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  //$resultc = $conn->query($sqla);
}
else
{
  $sqla = "SELECT * FROM new_customer where city='nashik'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);
}
?>

<?php
echo "<table>";
echo "<tr><th>Mobile Number</th><th>Name</th><th>Type of STB</th><th>Connections</th><th>Time</th>";
echo "</tr>";
while($emp1=mysqli_fetch_assoc($resulta))
{
echo "<tr>";
echo "<td>";
echo "{$emp1['mobile']}";
$_SESSION['mob'] = $emp1['mobile'];
//echo $_SESSION['mob'];
echo "</td>";
echo "<td>";
echo "{$emp1['firstname']} {$emp1['lastname']}";
echo "</td>";
echo "<td>";
echo "{$emp1['typeofstb']}";
echo "</td>";
echo "<td>";
echo "{$emp1['noofcon']}";
echo "</td>";
echo "<td>";
echo "{$emp1['installation']}";
echo "</td>";
echo "<td>";
echo "<form action='newlist_delete.php' method='POST'>";
echo "<input type='submit' name='submit' value='Delete' class='btn-login'>";
echo "</form>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>

</div>
</body>
</html>
