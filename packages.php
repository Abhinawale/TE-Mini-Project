<?php
session_start();
$user_name=$_SESSION['username'];
print_r($user_name);
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_POST['package'] == "Pack-1") {
    $package = "Package1";
}
if ($_POST['package'] == "Pack-2") {while($em=mysqli_fetch_assoc($result))
    {
        echo "{$em['firstname']} {$em['lastname']}<br>";
        }
   $package = "Package2";
}
if ($_POST['package'] == "Pack-3") {
   $package = "Package3";
}
if ($_POST['package'] == "Pack-4") {
    $package = "Package4";
 }
 $cost="SELECT * FROM packages where name_package='$package'";
 $costresult = $conn->query($cost);
 $em=mysqli_fetch_assoc($costresult);
 $cost1=$em['cost'];
print_r($cost1);
 $pay1="INSERT INTO payment (mobile,basic,cost) VALUES('$user_name','$package','$cost1')";
 $payresult1= $conn->query($pay1);
 $update2="INSERT INTO basic_pack (mobile,cost,basic)  VALUES('$user_name','$cost1','$package')";
 $updateresult2 = $conn->query($update2);


 
if ($_POST['addon1'] == "Sports Pack") {
    $addon1 = "Sports Pack";
    $cost2="SELECT * FROM packages WHERE name_package='$addon1'";
    $costresult2 = $conn->query($cost2);
    $em1=mysqli_fetch_assoc($costresult2);
    $cost3=$em1['cost'];
    $pay2="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon1','$cost3')";
    $payresult2= $conn->query($pay2);
    $update3="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost3','$addon1')";
    $updateresult3 = $conn->query($update3);
    print_r($addon1);
}

if ($_POST['addon2'] == "Religious Pack") {
   $addon2 = "Religious Pack";
   $cost4="SELECT * FROM packages WHERE name_package='$addon2'";
   $costresult4 = $conn->query($cost4);
   $em2=mysqli_fetch_assoc($costresult4);
   $cost5=$em2['cost'];
   $pay3="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon2','$cost5')";
   $payresult3= $conn->query($pay3);
   $update4="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost5','$addon2')";
   $updateresult4 = $conn->query($update4);
   print_r($addon);
}

if ($_POST['addon6'] == "Marathi Pack") {
   $addon6 = "Marathi Pack";
   $cost6="SELECT * FROM packages WHERE name_package='$addon6'";
   $costresult5 = $conn->query($cost6);
   $em3=mysqli_fetch_assoc($costresult5);
   $cost7=$em3['cost'];
   $pay4="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon6','$cost7')";
   $payresult4= $conn->query($pay4);
   $update5="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost7','$addon6')";
   $updateresult5 = $conn->query($update5);
   print_r($addon);
}

if ($_POST['addon3'] == "Kids Pack") {
    $addon3 = "Kids Pack";
    $cost8="SELECT * FROM packages WHERE name_package='$addon3'";
    $costresult6 = $conn->query($cost8);
    $em4=mysqli_fetch_assoc($costresult6);
    $cost9=$em4['cost'];
    $pay5="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon3','$cost9')";
    $payresult5= $conn->query($pay5);
    $update6="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost9','$addon3')";
    $updateresult6 = $conn->query($update6);
 }
 
 if ($_POST['addon4'] == "Music Pack") {
    $addon4 =  "Music Pack";
    $cost10="SELECT * FROM packages WHERE name_package='$addon4'";
    $costresult7 = $conn->query($cost10);
    $em5=mysqli_fetch_assoc($costresult7);
    $cost11=$em5['cost'];
    $pay6="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon4','$cost11')";
    $payresult6= $conn->query($pay6);
    $update7="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost11','$addon4')";
    $updateresult7 = $conn->query($update7);
 }
 
 if ($_POST['addon5'] == "Hindi Entertainment Pack") {
     $addon5 = "Hindi Entertainment Pack";
     $cost12="SELECT * FROM packages WHERE name_package='$addon5'";
     $costresult8 = $conn->query($cost12);
     $em6=mysqli_fetch_assoc($costresult8);
     $cost13=$em6['cost'];
     $pay7="INSERT INTO payment (mobile,addon,cost) VALUES('$user_name','$addon5','$cost13')";
     $payresult7= $conn->query($pay7);
     $update8="INSERT INTO add_on (mobile,cost,addon)  VALUES('$user_name','$cost13','$addon5')";
     $updateresult8 = $conn->query($update8);

   
  }
  $updatesql1 = "UPDATE customer SET total=(SELECT SUM(cost) FROM basic_pack WHERE mobile='$user_name')+(SELECT SUM(cost) FROM add_on WHERE mobile='$user_name')WHERE mobile='$user_name'";
  
    $updateresult1 = $conn->query($updatesql1);
 
  
 
header("Location:payment.php");


 ?>