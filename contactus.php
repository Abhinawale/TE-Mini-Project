<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);


$complaints="";
$mobile=$_POST["mobile"];
//$password=$_POST["password"];
$complaints=$_POST["complaints"];

$sql = "INSERT INTO feedback (mobile, firstname, lastname, city) SELECT customer.mobile, customer.firstname, customer.lastname, customer.city FROM customer where customer.mobile=$mobile" ;
$resulta = $conn->query($sql);
$sqlb = "UPDATE feedback SET complaints = '$complaints' where mobile = '$mobile'";
$resultb = $conn->query($sqlb);
?>   
<html>
<head>
<title>Contact Us</title>

    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/contactus.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
 <body>
    <div class="menu">
        
                
        <ul>
               <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="contactus.html"><b>Contact Us</b></a></li>
            <li><a href="packages.html">Packages</a></li>
            
           <li class="right"><a href="logout.php">Logout</a></li>
            <li class="right"><a href="getconnected.php">Get Connected</a></li>
            <li class="right"><a href="custlogin.html">Login</a></li>
            
            
            </ul>
        
  </div>
 
<div class="top">
<div class="img1">
<img src="images/contact-us.jpg">
</div>
<h2>FEEL FREE TO CONTACT US.</h2>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p style="text-align:center;color:#062960;font-size:24;">Your complaint has been successfully registered!
<br>
We will reach you soon!</p>

</body>
</html>
