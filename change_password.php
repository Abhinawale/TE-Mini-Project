<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM customer WHERE mobile='$user_name'";
$result=$mysqli->query($sql);
$results=$mysqli->query($sql);
?>
<html>

<head>

<title>My_Account</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">

    <link rel="stylesheet"  href="css/change_password.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">


    </head>

<body>

<div class="menu">

<ul>
<h1>DTH Services</h1>
<li><a href="home.html">HOME</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="packages.html">Packages</a></li>


<li class="right"><a href="logout.php">Logout</a></li>
<li class="right"><a href="getconnected.php">Get Connected</a></li>
<li class="right"><a href="custlogin.html">Login</a></li>


    </ul>

  </div>



  <div class="welcome">

    <h1>

    <?php
  while($em=mysqli_fetch_assoc($result))
  {
      echo "{$em['firstname']} {$em['lastname']}<br>";
      }
      ?>

  </h1>

  </div>


  <div class="profile">
  <ul>
    <li><a href="my_account.php"> My Account </a></li>
    <li><a href="profile.php"> My Profile </a></li>
    <li><a href="active_plans.php"> Active Plans </a></li>
    <li><a href="balance.php"> Balance </a></li>
    <li><a href="upgrade.html"> Upgrade</a></li>
    <li><a href="change_password.php"> Change Password </a></li>
    <li><a href="wallet.php"> My Wallet </a></li>
  </ul>

  </div>

<div class="window">

   <div class="info">

       <h1>Change Password</h1><br>

    </div>
    <br>


    <div class="container">

            <form action="change_password_submit.php" method="POST" name="regForm" onsubmit="return validateForm()">
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Current Password">
                        
                        <input type="password" name="new_password" placeholder="New Password">
                        <div id="new_password_error" class="val_error"></div>
                        </div>

                    <div class="form-input">

                        <input type="password" name="conf_password" placeholder="Confirm New Password">
                            </div>
                        <div id="conf_password_error" class="val_error"></div>
                    <input type="submit" name="submit" value="CHANGE PASSWORD" class="btn-login">

                </form>

  </div>
  <br>
  <br>
  <br>
</div>

<script>
var new_password = document.forms["regForm"]["new_password"];
    var conf_password = document.forms["regForm"]["conf_password"];

    var new_password_error = document.getElementById("new_password_error");
     var conf_password_error = document.getElementById("conf_password_error");
new_password.addEventListener("blur", new_passwordVerify, true);
    conf_password.addEventListener("blur", conf_passwordVerify, true);

function validateForm() {
if(new_password.value ==""){
        new_password.style.border = "3px solid #e01688";
        new_password_error.textContent = "Password  is required";
        new_password.focus();
        return false;
      }


      if(!new_password.value.match(/^[a-zA-Z-_@$.d]*\w{6,20}$/)){
        new_password.style.border = "3px solid #e01688";
        new_password_error.textContent = "Minimum 6 characters,case-sensitive, (@,$,_,-) allowed";
        new_password.focus();
        return false;
      }

      if(conf_password.value ==""){
        conf_password.style.border = "3px solid #e01688";
        conf_password_error.textContent = "Password  is required";
        conf_password.focus();
        return false;
      }

      if(!conf_password.value.match(/^[a-zA-Z-_@$.d]*\w{6,20}$/)){
        conf_password.style.border = "3px solid #e01688";
        conf_password_error.textContent = "Minimum 6 characters,case-sensitive, (@,$,_,-) allowed";
        conf_password.focus();
        return false;
      }
      
      if(new_password.value != conf_password.value){
       new_password.style.border = "3px solid #e01688";
        //password.focus();
       conf_password.style.border = "3px solid #e01688";
        conf_password_error.textContent = "Two passwords do not match!";
        //confirmpassword.focus();
        return false; 
      } 
     

}

function new_passwordVerify(){
    if(new_password.value != ""){
      new_password.style.border = "1px solid #5e6e66";
      new_password_error.innerHTML = "";
      return true;
      
    }
  }

function conf_passwordVerify(){
    if(conf_password.value != ""){
      conf_password.style.border = "1px solid #5e6e66";
      conf_password_error.innerHTML = "";
      return true;
      
    }
  }

</script>
</body>

</html>
