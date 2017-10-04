<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);
$user_name=$_SESSION["username"];
$emp_id=$_POST["emp_id"];


$sql="SELECT * FROM employee where userid='$user_name'";
$result=$conn->query($sql);

?>


<html>

<head>

<title>Employee Login</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/my_account.css">

    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

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
<?php
if($user_name[0]=='P' && $user_name[1]=='U')
{
  $sqla = "SELECT * FROM customer where city='pune'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);
}
else if($user_name[0]=='H' && $user_name[1]=='Y')
{
  $sqla = "SELECT * FROM customer where city='hyderabad'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);
}
else if($user_name[0]=='m' && $user_name[1]=='u')
{
  $sqla = "SELECT * FROM customer where city='mumbai'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);

}
else if($user_name[0]=='n' && $user_name[3]=='p')
{
  $sqla = "SELECT * FROM customer where city='nagpur' ";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);
}
else
{
  $sqla = "SELECT * FROM customer where city='nashik'";
  $resulta = $conn->query($sqla);
  $resultb = $conn->query($sqla);
  $resultc = $conn->query($sqla);
}
?>

<?php
echo "<table border=2>
<tr>
<th>Mob No</th>
<th>Name</th>
<th>Address</th>
</tr>";
while($emp1=mysqli_fetch_assoc($resulta))
{
    echo "<tr>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;" .$emp1['mobile']."&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>&nbsp;&nbsp;{$emp1['firstname']} {$emp1['lastname']}&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>&nbsp;&nbsp;{$emp1['address']}, {$emp1['street']}, {$emp1['landmark']}, {$emp1['locality']}</td>";
    echo "</tr>";

    }
    echo "</table>";
    
 ?>

<script>
$(function() {
    var $research = $('.research');
    $research.find('.hidden-row').hide();

    $research.find('.accordion').click(function(){
      $research.find('.accordion').not(this).nextAll('.hidden-row:first').fadeOut(500);
      $(this).nextAll('.hidden-row:first').fadeToggle(500);
    });
});
</script>


</table>





</div>




</body>

</html>
