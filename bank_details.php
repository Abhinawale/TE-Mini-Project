<?php

session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$mysqli = new mysqli($servername, $username, $password, $dbname);

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $check=mysqli_query($mysqli,"SELECT * FROM bank WHERE firstname='$firstname' AND lastname='$lastname'");
        $checkrows=mysqli_num_rows($check);
        if($checkrows>0) {
          header("location:customer_exists.php"); 
        }
        else{
          $sql="INSERT INTO bank (firstname,lastname) VALUES('$firstname','$lastname')";
          $mysqli->query($sql);
          $sql2="SELECT * FROM bank WHERE firstname='$firstname' AND lastname='$lastname'";
          $result=$mysqli->query($sql2);
          $result8=$mysqli->query($sql2);
          $results=$mysqli->query($sql2);
          $em8=mysqli_fetch_assoc($result8);
          $acc=$em8['account_no'];
          if ($result->num_rows > 0) 
          {
            $sql3="INSERT INTO bank_password (account_no) VALUES('$acc')";
            $result3=$mysqli->query($sql3);
          }
          }
?>

<html>
<head>

  <title>Bank</title>
      <meta name-"viewport" content-type="width=device-width initial-scale=1">
      <link rel="stylesheet"  href="css\bank.css">
      <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

</head>
<body>

  <div class="welcome">

  <h1>WELCOME

<?php
while($em=mysqli_fetch_assoc($results))
{
    echo "{$em['firstname']} {$em['lastname']}<br>";
    }
    ?>

</h1>

</div>

<div class="container">

    <h2><center>Your Account Details are:</h2><br>
    <h3> <?php
     while($em=mysqli_fetch_assoc($result))
     {
    echo "&nbsp;Name:&nbsp;{$em['firstname']} {$em['lastname']}<br><br>";
    echo "&nbsp;Account Number:&nbsp;{$em['account_no']}<br><br>";
   
    }
    $sql4="SELECT * FROM bank_password WHERE account_no='$acc'";
    $result4=$mysqli->query($sql4);
    $em4=mysqli_fetch_assoc($result4);
    echo "&nbsp;Password:&nbsp;{$em4['password']}<br><br>";
    ?>
</h3>
<h5>**Please maintain these details safely for all your further transactions.</h5>
</div>

</body>
</html>
