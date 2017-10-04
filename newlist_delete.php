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

$mobile = $_SESSION['mob'];

$updatesql4="SELECT * FROM new_customer WHERE mobile='$mobile'";
$updateresultsql = $conn->query($updatesql4);
$updateresultsql1 = $conn->query($updatesql4);
$updateresultsql2 = $conn->query($updatesql4);
$emp1=mysqli_fetch_assoc($updateresultsql);
$emp2=mysqli_fetch_assoc($updateresultsql1);
$emp3=mysqli_fetch_assoc($updateresultsql2);

    $typeofstb=$emp1['typeofstb'];
    $noofcon=$emp2['noofcon'];
    $installation=$emp3['installation'];

$updatesql1 = "UPDATE customer SET typeofstb = '$typeofstb' WHERE mobile = '$mobile'";
$updatesql2 = "UPDATE customer SET noofcon = '$noofcon' WHERE mobile = '$mobile'";
$updatesql = "UPDATE customer SET installation = '$installation' WHERE mobile = '$mobile'";


$updateresult1 = $conn->query($updatesql1);
$updateresult2 = $conn->query($updatesql2);
$updateresult = $conn->query($updatesql);

$sqla = "DELETE FROM new_customer where new_customer.mobile='$mobile'";
$resulta = $conn->query($sqla);
if($resulta===TRUE)
{
echo "Complaint Record has been deleted from database!";
echo "<form action='emp_newlist.php'>";
echo "<input type='submit' value='OK' name='submit' class='btn-login'>";
echo "</form>";
}


?>


</div>
</body>
</html>
