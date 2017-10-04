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
<div class="windowfoundcust">
<?php
$mobile = $_POST["mobile"];
//echo $mobile;
//CITY SCRIPT
$sql1 = "SELECT * FROM customer where customer.city='pune' and customer.mobile='$mobile'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM customer where customer.city='mumbai' and customer.mobile='$mobile'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM customer where customer.city='nagpur' and customer.mobile='$mobile'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM customer where customer.city='nashik' and customer.mobile='$mobile'";
$result4 = $conn->query($sql4);



if($user_name[0]=='P' && $user_name[1]=='U' && $result1->num_rows>0)
{
//$sqla = "SELECT * FROM customer where customer.mobile='$mobile'";
//$resulta = $conn->query($sqla);
$emp1 = mysqli_fetch_assoc($result1);
echo "<table>";
echo "<tr><th>Registered Mobile No. </th><td> {$emp1['mobile']}</td></tr>";
echo "<tr><th>Name </th><td> {$emp1['firstname']} {$emp1['lastname']}</td></tr>";
echo "<tr><th>Email </th><td> {$emp1['email']}</td></tr>";
echo "<tr><th>Address </th><td> {$emp1['address']} {$emp1['street']} {$emp1['landmark']} {$emp1['locality']} {$emp1['pincode']}</td></tr>";
echo "<tr><th>City </th><td> {$emp1['city']}</td></tr>";
$sqlb = "SELECT * FROM feedback where feedback.mobile='$mobile'";
$resultb = $conn->query($sqlb);
$emp2 = mysqli_fetch_assoc($resultb);

if(empty($emp2))
{
  echo " ";
}
else
{
echo "<tr><th>Complaints </th><td> {$emp2['complaints']}</td></tr>";
}
echo "</table>";

}

 else if($user_name[0]=='M' && $user_name[1]=='U' && $result2->num_rows>0)
{

//$sqla = "SELECT * FROM customer where customer.mobile='$mobile'";
//$resulta = $conn->query($sqla);
$emp1 = mysqli_fetch_assoc($result2);
echo "<table>";
echo "<tr><th>Registered Mobile No. </th><td> {$emp1['mobile']}</td></tr>";
echo "<tr><th>Name </th><td> {$emp1['firstname']} {$emp1['lastname']}</td></tr>";
echo "<tr><th>Email </th><td> {$emp1['email']}</td></tr>";
echo "<tr><th>Address </th><td> {$emp1['address']} {$emp1['street']} {$emp1['landmark']} {$emp1['locality']} {$emp1['pincode']}</td></tr>";
echo "<tr><th>City </th><td> {$emp1['city']}</td></tr>";
$sqlb = "SELECT * FROM feedback where feedback.mobile='$mobile'";
$resultb = $conn->query($sqlb);
$emp2 = mysqli_fetch_assoc($resultb);
if(empty($emp2))
{
  echo " ";
}
else
{
echo "<tr><th>Complaints </th><td> {$emp2['complaints']}</td></tr>";
}
echo "</table>";

}



else if($user_name[0]=='N' && $user_name[2]=='G' && $result3->num_rows>0)
{
 //$sqla = "SELECT * FROM customer where customer.mobile='$mobile'";
//$resulta = $conn->query($sqla);
$emp1 = mysqli_fetch_assoc($result3);
echo "<table>";
echo "<tr><th>Registered Mobile No. </th><td> {$emp1['mobile']}</td></tr>";
echo "<tr><th>Name </th><td> {$emp1['firstname']} {$emp1['lastname']}</td></tr>";
echo "<tr><th>Email </th><td> {$emp1['email']}</td></tr>";
echo "<tr><th>Address </th><td> {$emp1['address']} {$emp1['street']} {$emp1['landmark']} {$emp1['locality']} {$emp1['pincode']}</td></tr>";
echo "<tr><th>City </th><td> {$emp1['city']}</td></tr>";
$sqlb = "SELECT * FROM feedback where feedback.mobile='$mobile'";
$resultb = $conn->query($sqlb);
$emp2 = mysqli_fetch_assoc($resultb);
if(empty($emp2))
{
  echo " ";
}
else
{
echo "<tr><th>Complaints </th><td> {$emp2['complaints']}</td></tr>";
}
echo "</table>";

}


else if($user_name[0]=='N' && $user_name[2]=='S' && $result4->num_rows>0)
{

 //$sqla = "SELECT * FROM customer where customer.mobile='$mobile'";
//$resulta = $conn->query($sqla);
$emp1 = mysqli_fetch_assoc($result4);
echo "<table>";
echo "<tr><th>Registered Mobile No. </th><td> {$emp1['mobile']}</td></tr>";
echo "<tr><th>Name </th><td> {$emp1['firstname']} {$emp1['lastname']}</td></tr>";
echo "<tr><th>Email </th><td> {$emp1['email']}</td></tr>";
echo "<tr><th>Address </th><td> {$emp1['address']} {$emp1['street']} {$emp1['landmark']} {$emp1['locality']} {$emp1['pincode']}</td></tr>";
echo "<tr><th>City </th><td> {$emp1['city']}</td></tr>";
$sqlb = "SELECT * FROM feedback where feedback.mobile='$mobile'";
$resultb = $conn->query($sqlb);
$emp2 = mysqli_fetch_assoc($resultb);
if(empty($emp2))
{
  echo " ";
}
else
{
  echo "<tr><th>Complaints </th><td> {$emp2['complaints']}</td></tr>";
}

  echo "</table>";

}


else
{
  echo "Sorry! Cannot access data of customers from other city!<br />";
}

?>

</div>
</body>
</html>
